


 <section id="content" class="single-wrapper">
    <!-- Page Title -->
    <div class="grey-background wow fadeIn">
        <div class="container">
            <div class="heading-block page-title wow fadeInUp">
                <h1>Agregar una imagen</h1>
            </div>
        </div>
        <!-- CONTACT CONTENT START
                    ============================================= -->
        <div class="contact-section">
            <div class="container">
                <div class="row">



<!-- Ilustrable Id Field -->
{!! Form::hidden('ilustrable_id', Request::get('id') , ['class' => 'form-control']) !!}

<!-- Ilustrable Type Field -->
{!! Form::hidden('ilustrable_type', Request::get('type'), ['class' => 'form-control']) !!}

<!-- Ilustrable Type Field -->
{!! Form::hidden('back', Request::get('back'), ['class' => 'form-control']) !!}

<!-- Url Field -->
<div class="form-group col-sm-6">
{!! Form::label('url', 'Url:') !!}
{!! Form::file('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Urls Field -->
<div class="form-group col-sm-6">
{!! Form::label('urls', 'Urls:') !!}
{!! Form::text('urls', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-4">
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ url(Request::get('back')) }}" class="btn btn-default">Cancel</a>
</div>



                
                    </div>



                </div>
            </div>
        </div>
        <!-- CONTACT CONTENT END -->
    </div>
</section>