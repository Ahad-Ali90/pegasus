<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
    tbody td {
        text-align: center !important;
    }
    button, input:where([type=button]), input:where([type=reset]), input:where([type=submit]) {
    -webkit-appearance: button;
    background-color: #00000005;
    background-image: none;
    border: 1px solid #0000001c;
}
.modal-bg-color {
    background-color: rgba(0, 0, 0, 0.4); /* darker transparent background */
    backdrop-filter: blur(2px);           /* subtle blur behind modal */
}

.modal-box {
    background: #fff;
    border-radius: 12px;                  /* smooth rounded corners */
    border: 1px solid rgba(0, 0, 0, 0.1); /* light border */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* deep shadow for pop effect */
    padding: 20px;
    width: 400px;
    max-width: 90%;
    animation: fadeIn 0.2s ease-in-out;
}
.danger-btn{
    color:red;
}

@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to   { opacity: 1; transform: scale(1); }
}
    input ,textarea{
        background-color: #00000005 !important;
        border:none
    }

.switch {
  font-size: 17px;
  position: relative;
  display: inline-block;
  width: 3.5em;
  height: 2em;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #B0B0B0;
  border: 1px solid #B0B0B0;
  transition: .4s;
  border-radius: 32px;
  outline: none;
  height: 25px;
  width: 50px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 19px;
  width: 19px;
  border-radius: 50%;
  outline: 2px solid #B0B0B0;
  left: 2px;
  bottom: 2px;
  background-color: #fff;
  transition: transform .25s ease-in-out 0s;
}

.slider-icon {
  opacity: 0;
  height: 12px;
  width: 12px;
  stroke-width: 8;
  position: absolute;
  z-index: 999;
  stroke: #222222;
  right: 60%;
  top: 30%;
  transition: right ease-in-out .3s, opacity ease-in-out .15s;
}

input:checked + .slider {
  background-color: #222222;
}

input:checked + .slider .slider-icon {
  opacity: 1;
  right: 10%;
  top: 5px;
}

input:checked + .slider:before {
  transform: translateX(1.5em);
  outline-color: #181818;
}
</style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.admin.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
<script>
// Create or get toast container
function getToastContainer() {
    let container = document.getElementById('toast-container');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toast-container';
        container.style.position = 'fixed';
        container.style.top = '20px';
        container.style.right = '20px';
        container.style.display = 'flex';
        container.style.flexDirection = 'column';
        container.style.gap = '10px'; // spacing between toasts
        container.style.zIndex = '9999';
        document.body.appendChild(container);
    }
    return container;
}

function showToast(message, type = 'success') {
    const container = getToastContainer();

    const toast = document.createElement('div');
    toast.style.padding = '10px 20px';
    toast.style.borderRadius = '5px';
    toast.style.fontWeight = '500';
    toast.style.fontSize = '14px';
    toast.style.display = 'flex';
    toast.style.alignItems = 'center';
    toast.style.gap = '8px';
    toast.style.boxShadow = '0px 4px 6px rgba(0,0,0,0.1)';
    toast.style.transition = 'opacity 0.3s ease';
    toast.style.opacity = '1';

    let icon = '';
    if (type === 'success') {
        toast.style.backgroundColor = '#e3f7eb'; // light green
        toast.style.color = '#155724';
        icon = '<i class="fas fa-check-circle" style="color:#28a745;"></i>';
    } else if (type === 'error') {
        toast.style.backgroundColor = '#f8d7da'; // light red
        toast.style.color = '#721c24';
        toast.style.border = '1px solid #f5c6cb';
        icon = '<i class="fas fa-times-circle" style="color:#dc3545;"></i>';
    } else {
        toast.style.backgroundColor = '#eee';
        toast.style.border = '1px solid #ccc';
        icon = '<i class="fas fa-info-circle" style="color:#17a2b8;"></i>';
    }

    toast.innerHTML = icon + '<span>' + message + '</span>';
    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}



function refreshCurrentPage() {
    fetch(window.location.href, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.text())
    .then(html => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, "text/html");
        // Replace the tbody content only
        const newTbody = doc.querySelector('#sortableBody');
        const currentTbody = document.querySelector('#sortableBody');
        if (newTbody && currentTbody) {
            currentTbody.innerHTML = newTbody.innerHTML;
        }
    })
    .catch(error => console.error('Error refreshing table:', error));
}
                //Play Sound
    function playSound(type) {
        let audio;
        if (type === "success") {
            audio = new Audio('/sound/success.mp3');
        } else {
            audio = new Audio('/sound/error.mp3');
        }
        audio.play().catch(error => console.log('Audio play error:', error));
    }


        </script>
        <script>
      document.addEventListener('DOMContentLoaded', function () {
    document.body.addEventListener('submit', function(e) {
        if (!e.target.classList.contains('ajax-delete-form')) return;
        e.preventDefault();

        if (!confirm('Are you sure?')) return;

        const form = e.target;
        const skillId = form.dataset.id;
        const url = form.action;

        fetch(url, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                const row = document.querySelector(`#row-${skillId}`);
                if (row) row.remove();

                showToast(data.message, 'success');
                playSound('success');
                refreshCurrentPage();

            } else {
                showToast('Delete failed', 'error');
                playSound('error');
            }
        })
        .catch(() => {
            showToast('Delete failed', 'error');
            playSound('error');
        });
    });
});


</script>
    </body>
</html>
