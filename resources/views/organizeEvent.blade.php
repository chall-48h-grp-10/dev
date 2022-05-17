<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Organiser un évènement</title>
    </head>
    <body>
        <form action="/createEvent" method="post" enctype="multipart/form-data">
            @csrf
            <label for="eventType">Type d'évènement</label>
            <input type="radio" name="type" id="eventType" value="offline" checked>
            <input type="radio" name="type" id="eventType" value="online">
            <label for="eventDate">Date</label>
            <input type="datetime-local" name="date" id="eventDate">
            <label for="name">Nom de l'évènement</label>
            <input type="text" name="name" id="eventName">
            <label for="details">Détails</label>
            <input type="text" name="details" id="eventDetails">

            <input type="hidden" name="lat" id="latitude">
            <input type="hidden" name="lng" id="longitude">

            <input type="file" name="img" id="eventImg" accept=".png, .jpg, .jpeg">

            <input type="submit" value="Créer">
        </form>

        <div style="height: 400px; width: 400px;" id="map"></div>

    </body>

    <script src="{{ asset('js/map.js') }}"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH9rbAM5ekcBRvcwIbqTg78q-FnIiMI7k&callback=initMap"></script>

