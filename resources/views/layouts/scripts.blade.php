<script src="{{url('/')}}/assets/libs/@popperjs/core/umd/popper.min.js"></script>
<script src="{{url('/')}}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/assets/js/defaultmenu.min.js"></script>
<script src="{{url('/')}}/assets/libs/node-waves/waves.min.js"></script>
<script src="{{url('/')}}/assets/js/sticky.js"></script>
<script src="{{url('/')}}/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{url('/')}}/assets/js/simplebar.js"></script>
<script src="{{url('/')}}/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
<script src="{{url('/')}}/assets/js/custom-switcher.min.js"></script>
<script src="{{url('/')}}/assets/js/Toasts.js"></script>
<script src="{{url('/')}}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{url('/')}}/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="{{url('/')}}/assets/libs/quill/quill.min.js"></script>
<script src="{{url('/')}}/assets/libs/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/pivot.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

@yield ('script_includes')

{{-- <script src="{{url ('/')}}/assets/js/global_functions.js?{{env ('JS_GLOBAL')}}"></script>
<script src="{{url ('/')}}/assets/js/my_elements.js?{{env ('JS_GLOBAL')}}"></script>
<script src="{{url ('/')}}/assets/js/my_navbars.js?{{env ('JS_GLOBAL')}}"></script> --}}

@yield ('scripts')