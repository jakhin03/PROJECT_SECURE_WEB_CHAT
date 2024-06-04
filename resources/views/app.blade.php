@extends('layouts.app-auth')

@section('content')
@if (env('APP_IS_DOCKER') == 'true')
<script src="/socket.io/socket.io.js"></script>
@else
<script src="http://localhost:6001/socket.io/socket.io.js"></script>
@endif

<script>
    async function checkSession() {
      try {
        const response = await fetch('/check-session', {
          method: 'GET',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          }
        });

        const data = await response.json();
        if (!data.active) {
          window.location.href = '/login';
        }
      } catch (error) {
        console.error(error);
        window.location.href = '/login';
      }
    }

    // Gọi hàm kiểm tra session ngay khi trang được tải
    checkSession();
  </script>
<script>window.__app__ = @json($data)</script>
@endsection
