@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                        <?php
                        if (!empty($users)) {
                            foreach ($users as $user) {
                                ?>
                        <div class="user_block">
                            <p><?= $user->name.'  ' . $user->surname?> </p>
                            <p><?= $user->email?></p>
                            <button data-id="<?= $user->id?>" id="addFriend">+add freiand</button>
                        </div>
                        <?php
                            }
                        }
                        ?>
            </div>
        </div>
    </div>
</div>
        <script type="text/javascript" src="{{ asset('/js/custom.js')}}"></script>

@endsection

