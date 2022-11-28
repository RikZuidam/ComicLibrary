<link rel="stylesheet" href="{{ asset('/assets/css/comic-row.css') }}">


<div class="comic-row-wrapper">
    <div class="comic-row-title"><p>COMIC GENRE TITLE DING</p></div>
    <div class="comic-row">
        <div class="comic-row-scroll">

            <div class="comic-card">
                <div class="comic-card-image-wrapper" style="background-image: url('{{ asset('/assets/images/spiderman.jpg') }}')">
                    <div class="comic-card-image-cart-overlay">
                        <svg add-to-cart="12" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.975 8l.025-.5c0-.517-.067-1.018-.181-1.5h5.993l-.564 2h-5.273zm-2.475 10c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm11.305-15l-3.432 12h-10.428l-.455-1.083c-.323.049-.653.083-.99.083-.407 0-.805-.042-1.191-.114l1.306 3.114h13.239l3.474-12h1.929l.743-2h-4.195zm-6.305 15c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm-4.5-10.5c0 2.485-2.018 4.5-4.5 4.5-2.484 0-4.5-2.015-4.5-4.5s2.016-4.5 4.5-4.5c2.482 0 4.5 2.015 4.5 4.5zm-2-.5h-2v-2h-1v2h-2v1h2v2h1v-2h2v-1z"/></svg>
                        {{-- add-to-cart moet id van product in db zijn --}}
                    </div>
                </div>
                <p class="comic-card-title">COMIC TITLE lore</p>
                <p class="comic-card-price">$ 19,99</p>
            </div>

        </div>
    </div>
</div>