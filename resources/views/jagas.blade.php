@extends('layouts.main')

@section('title', 'Jagas')

@section('content')
<div x-data="{ mostrar: false }">

    <h1>Está é a página dos Jagas</h1>

    <button @click="mostrar = !mostrar">
        BUM
    </button>
    <div x-show="mostrar">
        <h1>Chinas o Bigode</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/455323667_1088114615816405_3171290179691559997_n.jpg?ccb=11-4&oh=01_Q5AaIDjDwT5fvthFx_Qkzt2zNcsScufqhXJsdL28Bj6wy1EK&oe=675606D5&_nc_sid=5e03e0&_nc_cat=110"
            alt="vitor">
        <h1>Gordo o Imenso</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/342956445_781840543284023_5783281754471409105_n.jpg?stp=dst-jpg_tt6&ccb=11-4&oh=01_Q5AaILNRXDLEZg0HoBLs_KGE6YA8CdhVSf-CT06t2Z-hsC5G&oe=6754DE51&_nc_sid=5e03e0&_nc_cat=107"
            alt="goidin">
        <h1>Duzão o Doberman</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/463252742_1119037599640299_2618097479675624293_n.jpg?ccb=11-4&oh=01_Q5AaICp_uVzPEUnaqorCgqrPWG8prp_Rqgrgbtgd0DNdYULV&oe=6754DC4D&_nc_sid=5e03e0&_nc_cat=104"
            alt="dudu">
        <h1>Jaguinha a Jaguinha</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/467838946_922448929412044_7137118308705404107_n.jpg?ccb=11-4&oh=01_Q5AaIPPIqvSumZlhLc0qJadVkACtYgx-oQHLb20hOiPDBITB&oe=6754C85A&_nc_sid=5e03e0&_nc_cat=105"
            alt="jaguinha">
        <h1>Gozi o Palminha</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/463405997_1071748511263179_7740287514248833471_n.jpg?stp=dst-jpg_tt6&ccb=11-4&oh=01_Q5AaIG1vxeexVBO5iByrPrB2UHKFe2dKUT5K79FMNMeRs5-x&oe=6754DBA4&_nc_sid=5e03e0&_nc_cat=105"
            alt="gozi">
        <h1>Braço o Pitcher Jaga</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/463594867_1755823825171671_5171261351810681156_n.jpg?stp=dst-jpg_tt6&ccb=11-4&oh=01_Q5AaIA30HZ86kv0lOUnOt0gJPbBwf8J5sDzq5FzmUrFD5ASc&oe=6754A93C&_nc_sid=5e03e0&_nc_cat=107"
            alt="braço">
        <h1>Felpo o Barba</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/468073696_431223776534490_7098619591436896941_n.jpg?ccb=11-4&oh=01_Q5AaIA9-YpnJAuTHUJNRZUhqW67Anc7fcihQJltKWtqFcIt2&oe=6754DD83&_nc_sid=5e03e0&_nc_cat=102"
            alt="felpo">
        <h1>Sono o Pitbull</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/403904365_207186789026825_7125906379455392410_n.jpg?stp=dst-jpg_tt6&ccb=11-4&oh=01_Q5AaIB88EFGc43QLOmuoT-d7t-AlQAP8zV5-DuUv1WvwA8Un&oe=6754B5A8&_nc_sid=5e03e0&_nc_cat=101"
            alt="sono">
        <h1>Bic o Encantador de Bucetas</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/455499203_1705303560312513_122545588909426622_n.jpg?ccb=11-4&oh=01_Q5AaIOfHn2MxkfO6K9cZPkLBan_W37N8sHN0LV1QsyBGYWNL&oe=6754C778&_nc_sid=5e03e0&_nc_cat=105"
            alt="bic">
        <h1>Danilão o Sorridente</h1>
        <img src="https://media-gru1-2.cdn.whatsapp.net/v/t61.24694-24/371294465_1489994798484856_3241704008621436717_n.jpg?ccb=11-4&oh=01_Q5AaIIN8n3CxxS12cOzzHBNqherS18FYFTTCRgjx-4AYOueA&oe=675619D9&_nc_sid=5e03e0&_nc_cat=103"
            alt="danilão">
    </div>
    <a href="/">Voltar para a home</a>
</div>
@endsection
