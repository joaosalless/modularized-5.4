<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li class="title">Institucional</li>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('contato') }}">Fale conosco</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li class="title">Área Restrita</li>
                            @foreach(config('auth.providers') as $provider => $value)
                                <li>
                                    <a href="{{ route("{$provider}.dashboard.index") }}">
                                        {{ trans("{$provider}::panel.name") }}
                                    </a>
                                </li>
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
                        <span class="text-muted">© {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.</span>
                    </div>
                    <div class="col-md-12 text-center">
                        <span class="text-muted">
                            Desenvolvido por <a href="http://i11.com.br" target="_blank" class="text-developer">I 11 TECNOLOGIAS</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>