<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Organiser un évènement</title>
    </head>
    <body>
        <form action="/createEvent" method="post">
            <label for="eventType">Type d'évènement</label>
            <input type="radio" name="eventType" id="eventType" value="offline" checked>
            <input type="radio" name="eventType" id="eventType" value="online">
            <label for="date">Date</label>
            <input type="datetime-local" name="" id="">
            <label for="name">Nom de l'évènement</label>
            <input type="text" name="eventName" id="name">
            <label for="details">Détails</label>
            <input type="text" name="eventDetails" id="details">
        </form>

        <div style="height: 400px; width: 400px;" id="map"></div>

    </body>

    <script src="{{ asset('js/map.js') }}"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH9rbAM5ekcBRvcwIbqTg78q-FnIiMI7k&callback=initMap"></script>

