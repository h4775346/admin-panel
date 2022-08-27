@push('head')
    <meta name="robots" content="noindex" />
    <link
          href="{{ asset('images/logo.png') }}"
          sizes="any"
          type="image/svg+xml"
          id="favicon"
          rel="icon"
    >
@endpush

<div class="h2 fw-light d-flex align-items-center">
   <img src="{{asset('images/logo.png')}}"  width="100px"/>

    <p class="ms-3 my-0 d-none d-sm-block">
        Admin Panel
        <small class="align-top opacity">Platform</small>
    </p>
</div>
