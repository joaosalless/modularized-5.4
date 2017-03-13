{{--<script src="{{ mix('/js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('/js/vendor.js') }}"></script>--}}
{{--<script src="{{ mix('/js/app.js') }}"></script>--}}

<script src="/vendor/jquery/dist/jquery.js"></script>
<script src="/vendor/clipboard/dist/clipboard.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
<script src="/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="/vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
<script src="/vendor/bootstrap-filestyle/src/bootstrap-filestyle.min.js"></script>
<script src="/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="/vendor/tinymce/tinymce.min.js"></script>
<script src="/vendor/tinymce/langs/pt_BR.js"></script>
<script src="/js/highlight.pack.js"></script>
<script src="/js/bootstrap-toggle.js"></script>
<script>hljs.initHighlightingOnLoad();</script>

<script>

    $(function () {

        $('.input-group.date').datepicker({
            todayBtn: true,
            autoclose: true,
            language: "pt-BR",
        });

        tinymce.init({
            selector: '.textarea',
            max_height: 400,
            min_height: 150,
            menubar: false,
            browser_spellcheck: true,
            plugins: ['fullpage', 'paste', 'link', 'autoresize', 'pagebreak'],
            advlist_number_styles: 'lower-alpha,lower-roman,upper-alpha,upper-roman',
            content_css: ['/vendor/bootstrap/dist/css/bootstrap.min.css'],
        });

        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });

        var clipboard = new Clipboard('.btnToClipboard');

    })

</script>