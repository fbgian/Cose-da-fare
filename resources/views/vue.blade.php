@extends('template.base')
@section('body')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Prova vue</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Snippets</li>
        </ol>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"> Form inserimento valori</div>
                    <div class="card-body">
                        <text-input id="ciao">

                        </text-input>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script type="text/javascript">

    const app = Vue.createApp({})

    app.component('text-input', {
        data() {
            return {
                count:0
            }
        },
        template:`
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        `
    })

    app.mount('.card-body')

</script>
@endsection
