@extends('layouts.backend.app')

@section('title','Thesaurus')

@push('css')

@endpush

@section('content')
        <div class="container-fluid">
            <!-- Vertical Layout | With Floating Label -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT THESAURUS
                            </h2>
                        </div>
                        <div class="body">
                            <form action="{{ route('author.thesaurus.update', $thesaurus->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group form-float">
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="id" class="form-control" name="id" value="{{ $thesaurus->id }}">
                                        <label class="form-label">ID</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="mt" class="form-control" name="mt" value="{{ $thesaurus->mt }}">
                                        <label class="form-label">MT</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="sn" class="form-control" name="sn" value="{{ $thesaurus->sn }}">
                                        <label class="form-label">SN</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="uf" class="form-control" name="uf" value="{{ $thesaurus->uf }}">
                                        <label class="form-label">UF</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="use" class="form-control" name="use" value="{{ $thesaurus->use }}">
                                        <label class="form-label">USE</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="bt" class="form-control" name="bt" value="{{ $thesaurus->bt }}">
                                        <label class="form-label">BT</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="nt" class="form-control" name="nt" value="{{ $thesaurus->nt }}">
                                        <label class="form-label">NT</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="it" class="form-control" name="it" value="{{ $thesaurus->it }}">
                                        <label class="form-label">IT</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="so" class="form-control" name="so" value="{{ $thesaurus->so }}">
                                        <label class="form-label">SO</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="de" class="form-control" name="de" value="{{ $thesaurus->de }}">
                                        <label class="form-label">DE</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="ko" class="form-control" name="ko" value="{{ $thesaurus->ko }}">
                                        <label class="form-label">KO</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="ana" class="form-control" name="ana" value="{{ $thesaurus->ana }}">
                                        <label class="form-label">ANA</label>
                                    </div>
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="tgl" class="form-control" name="tgl" value="{{ $thesaurus->tgl }}">
                                        <label class="form-label">TGl</label>
                                    </div>
                               <!-- <br>
                                    <div class="form-line">
                                        <input type="radio" id="status" class="with-gap" name="status" value="1" {{ $thesaurus->status == 1 ? 'checked' : '' }}>
                                        <label for="status">Enabled</label>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <input type="radio" id="status" class="with-gap" name="status" value="0" {{ $thesaurus->status == 0 ? 'checked' : '' }}>
                                        <label for="status">Disabled</label>
                                    </div> -->
                                    <br>
                                    <div class="form-line">
                                        <input type="text" id="author" class="form-control" name="author" value="{{ $thesaurus->author }}">
                                        <label class="form-label">Author :</label>
                                    </div>
                                </div>
                                <a class="btn btn-danger m-t-15 waves-effect" href="{{ route('author.thesaurus.index') }}">BACK</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection

@push('script')

@endpush