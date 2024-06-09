<section class="subscribe_section">
    <div class="container-fuild">
        <div class="box">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="subscribe_form">
                        <div class="heading_container heading_center">
                            <h3>Subskrybuj, aby dostawać super oferty</h3>
                        </div>
                        <p>Na Twój email będą wysyłane powiadomienia o promocjach</p>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('subscribe') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Wprowadź email" required>
                            <button type="submit">
                                Subskrybuj
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
