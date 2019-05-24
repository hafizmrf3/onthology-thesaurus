@if(Session::has('LastSign'))
    <div class="alert alert-success {{ Session::has('Pemberitahuan') ? 'alert-important' : '' }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('LastSign') }}
        
        <div class="panel-body">
                <p>Current Sign in at : {{ auth()->user()->current_sign_in_at }}</p>

                <p>Last Sign in at : {{ auth()->user()->last_sign_in_at }}</p>
        </div>
    </div>

@endif