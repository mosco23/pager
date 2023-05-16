@php
    $socialMedia = [
            "facebook",
            "google-plus",
            "whatsapp",
            "twitter",
            "youtube",
            "instagram",
        ];
@endphp
<ul class="list-inline top-data">
    @foreach ($socialMedia AS  $social)
        @if(config("reseaux-sociaux.$social"))
            <li>
                <a href="#" target="_empty">
                    <i class="fa top-social fa-{{ $social }}"></i>
                </a>
            </li>
        @endif
    @endforeach
    <li>
        <a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">
            Login
        </a>
    </li>
</ul>
