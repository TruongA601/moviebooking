@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- @if (Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif --}}

@if (Session::has('success'))
    <script>
        Swal.fire({
            title: '{{Session::get('success')}}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@if (Session::has('error'))
    <script>
        Swal.fire({
            title: '{{Session::get('error')}}',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@if (Session::has('add_success'))
    <script>
        Swal.fire({
            title: '{{Session::get('add_success')}}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
@if (Session::has('update_success'))
    <script>
        Swal.fire({
            title: '{{Session::get('update_success')}}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
@endif
<script>
    function functionDelete(ev){
        ev.preventDefault();
        var urlToRedirect=ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
         Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
         window.location.href=urlToRedirect;
            Swal.fire(
              
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
    }
</script>