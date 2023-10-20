<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <nav class="footer-nav">
                <ul>
                <li>
                    <img src="{{ asset('img/logo_ibirite.png') }}" alt="Logo da Prefeitura" width="100px"> 
                </li>
                <li> 
                    <a href="https://www.ibirite.mg.gov.br/">
                        <img src="{{ asset('img/logo_prefeitura.png') }}" alt="Logo da Prefeitura" width="100px">
                    </a>
                </li>
                    
                </ul>
            </nav>
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', Feito ') }}<i class="fa fa-heart heart"></i>{{ __(' por ') }}<a class="@if(Auth::guest()) text-white @endif" href="https://www.linkedin.com/in/guilherme-augusto-05bb0425b/" target="_blank">{{ __('Guilherme Augusto') }}</a>{{ __(' e ') }}<a class="@guest text-white @endguest" target="_blank" href="https://www.linkedin.com/in/arthurfrade/">{{ __('Arthur Frade') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>