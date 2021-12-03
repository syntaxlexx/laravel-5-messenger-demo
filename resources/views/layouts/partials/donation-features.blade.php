<div class="gradient-bg">
    <h4 class="h4 text-center">OUR WISHLIST</h4>
    <p>Here is a list of features we would wish to implement soon</p>
    <ul>
        <li>Nuxt.js demo</li>
        <li>Next.js demo</li>
        <li>Livewire demo</li>
        <li>Alphine.js demo</li>
        <li>Shareable chat link (Invite Code/Link)</li>
        <li>Shareable QR Code (Invite QR code)</li>
    </ul>

    <p>
        You can support the development via
        
        <ul>
            @foreach(acelords_support_links() as $link)
                <li><a href="{{ $link['link'] }}" target="_blank">{{ $link['label'] }}</a></li>
            @endforeach
        </ul>
        
    </p>
</div>