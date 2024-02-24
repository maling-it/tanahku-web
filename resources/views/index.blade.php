<x-app-layout>
    <div class="card p-3 h-full m-2">
        <h2 class="card-title">
            Peta Tanahku
        </h2>
        <div class="card-body">
            Menampilakan Perangkat yang tersedia
        </div>
    </div>
    <div class="m-2">

        <x-map-tanahku/>
    </div>

</x-app-layout>
<style>
    .popover-body {
        min-width: 276px;
    }
    #marker {
        width: 20px;
        height: 20px;
        border: 1px solid #088;
        border-radius: 10px;
        background-color: #0FF;
        opacity: 0.5;
      }
      #vienna {
        text-decoration: none;
        color: white;
        font-size: 11pt;
        font-weight: bold;
        text-shadow: black 0.1em 0.1em 0.2em;
      }

</style>
