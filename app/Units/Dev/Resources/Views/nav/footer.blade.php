<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li class="title">Institucional</li>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/quem-somos') }}">Quem somos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li class="title">Área Restrita</li>
                            @foreach(config('auth.providers') as $provider => $value)
                                @if(Route::has("{$provider}.dashboard.index"))
                                    <li>
                                        <a href="{{ route("{$provider}.dashboard.index") }}">
                                            {{ trans("{$provider}::panel.name") }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3 newsletter">
                        <ul class="list-unstyled">
                            <li class="title">Termos e Políticas</li>
                            <li><a href="{{ url('termos') }}">Termos de Serviço</a></li>
                            <li><a href="{{ url('politica/privacidade') }}">Política de Privacidade</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li class="title">Redes sociais</li>
                            <li><a href="http://facebook.com/{{env('FACEBOOK_USERNAME')}}" target="_blank"><i class="fa fa-fw fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="http://instagram.com/{{env('INSTAGRAM_USERNAME')}}" target="_blank"><i class="fa fa-fw fa-instagram"></i> Instagram</a></li>
                            {{--<li><a href="http://twitter.com/{{env('TWITTER_USERNAME')}}" target="_blank"><i class="fa fa-fw fa-twitter"></i> Twitter</a></li>--}}
                            {{--<li><a href="http://linkedin.com/{{env('LINKEDIN_USERNAME')}}" target="_blank"><i class="fa fa-fw fa-linkedin-square"></i> Linkedin</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span class="text-muted">© {{ date('Y') }} {{ config('app.name') }}</span>
                    </div>
                    <div class="col-md-12 text-center">
                        <span class="text-muted">
                            Desenvolvido por <a href="https://github.com/joaosalless" target="_blank" class="text-developer">joaosalless</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>