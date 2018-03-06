@if ($message = Session::get('success'))
    <br/>
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@elseif($message = Session::get('warning'))
    <br/>
    <div class="alert alert-warning">
        <p>{{ $message }}</p>
    </div>
@elseif($message = Session::get('danger'))
    <br/>
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif