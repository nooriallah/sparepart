<div class="search_wrapper">
    <div class="search-container">
        <h1>Find your car spare parts</h1>
        <form action={{ route("serp", 2025) }} method="get" class="mt-5">

            <label for="vin"></label>
            <input
                type="text"
                name="vin"
                class="search-box"
                placeholder="Enter VIN number..."
                id="vin"
            />
            <button class="search-button">Search</button>
        </form>
    </div>

</div>

