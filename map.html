<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width"
    />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="css/leaflet.css" />
    <link rel="stylesheet" href="css/L.Control.Layers.Tree.css" />
    <link rel="stylesheet" href="css/L.Control.Locate.min.css" />
    <link rel="stylesheet" href="css/qgis2web.css" />
    <link rel="stylesheet" href="css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="css/leaflet-search.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"
    />
    <link rel="stylesheet" href="css/leaflet-measure.css" />
    <link rel="stylesheet" href="css/mystyle.css" />
    <link
      rel="stylesheet"
      href="js/leaflet-routing-machine/dist/leaflet-routing-machine.css"
    />

    <title>WebGIS Persebaran UMKM Desa Bejalen</title>
    <style>
      /* General page styling */
      body {
        margin: 0;
        font-family: "Arial", sans-serif;
        font-size: 20px;
        color: #333;
        background-color: #f4f4f9;
      }

      /* Map container styling */
      #map {
        height: calc(100vh - 60px); /* Full height minus navbar */
        margin-top: 10px;
        border: 2px solid #006400;
        border-radius: 10px;
        box-shadow: 0px 8px 16px rgba(0, 100, 0, 0.2);
      }

      /* Footer styling (optional) */
      .footer {
        text-align: center;
        padding: 10px 0;
        background-color: #333;
        color: #fff;
        font-size: 0.9em;
      }

      /* Buttons and other controls on map */
      .leaflet-bar a,
      .leaflet-bar a:hover {
        background-color: #006400;
        color: #fff;
        border-radius: 4px;
      }

      /* Style for informational popups on map */
      .leaflet-popup-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5em;
      }
    </style>
  </head>
  <body>
    <!-- Map Section -->

    <script>
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("GET", "creategeojson.php", true);
      xmlhttp.send();
    </script>

    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/L.Control.Layers.Tree.min.js"></script>
    <script src="js/L.Control.Locate.min.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <script src="js/leaflet-search.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="js/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script src="data/RW_Bejalen_3.php"></script>
    <script src="data/RT_Bejalen_4.php"></script>
    <script src="data/UMKMbejalen_3.js"></script>

    <div id="map"></div>

    <script>
      var map = L.map("map", {
        zoomControl: false,
        maxZoom: 28,
        minZoom: 1,
      }).fitBounds([
        [-7.284516460720787, 110.3867401285826],
        [-7.265895386314566, 110.42467622819012],
      ]);
      var hash = new L.Hash(map);
      map.attributionControl.setPrefix(
        '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
      );
      var autolinker = new Autolinker({
        truncate: { length: 30, location: "smart" },
      });
      // remove popup's row if "visible-with-data"
      function removeEmptyRowsFromPopupContent(content, feature) {
        var tempDiv = document.createElement("div");
        tempDiv.innerHTML = content;
        var rows = tempDiv.querySelectorAll("tr");
        for (var i = 0; i < rows.length; i++) {
          var td = rows[i].querySelector("td.visible-with-data");
          var key = td ? td.id : "";
          if (
            td &&
            td.classList.contains("visible-with-data") &&
            feature.properties[key] == null
          ) {
            rows[i].parentNode.removeChild(rows[i]);
          }
        }
        return tempDiv.innerHTML;
      }
      // add class to format popup if it contains media
      function addClassToPopupIfMedia(content, popup) {
        var tempDiv = document.createElement("div");
        tempDiv.innerHTML = content;
        if (tempDiv.querySelector("td img")) {
          popup._contentNode.classList.add("media");
          // Delay to force the redraw
          setTimeout(function () {
            popup.update();
          }, 10);
        } else {
          popup._contentNode.classList.remove("media");
        }
      }
      var zoomControl = L.control
        .zoom({
          position: "topleft",
        })
        .addTo(map);
      L.control.locate({ locateOptions: { maxZoom: 19 } }).addTo(map);
      var measureControl = new L.Control.Measure({
        position: "topleft",
        primaryLengthUnit: "meters",
        secondaryLengthUnit: "kilometers",
        primaryAreaUnit: "sqmeters",
        secondaryAreaUnit: "hectares",
      });
      measureControl.addTo(map);
      document.getElementsByClassName(
        "leaflet-control-measure-toggle"
      )[0].innerHTML = "";
      document.getElementsByClassName(
        "leaflet-control-measure-toggle"
      )[0].className += " fas fa-ruler";
      var bounds_group = new L.featureGroup([]);
      function setBounds() {}
      map.createPane("pane_GoogleRoad_0");
      map.getPane("pane_GoogleRoad_0").style.zIndex = 400;
      var layer_GoogleRoad_0 = L.tileLayer(
        "https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}",
        {
          pane: "pane_GoogleRoad_0",
          opacity: 1.0,
          attribution:
            '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
          minZoom: 1,
          maxZoom: 28,
          minNativeZoom: 0,
          maxNativeZoom: 20,
        }
      );
      layer_GoogleRoad_0;
      map.createPane("pane_GoogleSatellite_1");
      map.getPane("pane_GoogleSatellite_1").style.zIndex = 401;
      var layer_GoogleSatellite_1 = L.tileLayer(
        "https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}",
        {
          pane: "pane_GoogleSatellite_1",
          opacity: 1.0,
          attribution:
            '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
          minZoom: 1,
          maxZoom: 28,
          minNativeZoom: 0,
          maxNativeZoom: 20,
        }
      );
      layer_GoogleSatellite_1;
      map.createPane("pane_OSMStandard_2");
      map.getPane("pane_OSMStandard_2").style.zIndex = 402;
      var layer_OSMStandard_2 = L.tileLayer(
        "http://tile.openstreetmap.org/{z}/{x}/{y}.png",
        {
          pane: "pane_OSMStandard_2",
          opacity: 1.0,
          attribution:
            '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
          minZoom: 1,
          maxZoom: 28,
          minNativeZoom: 0,
          maxNativeZoom: 19,
        }
      );
      layer_OSMStandard_2;
      map.addLayer(layer_OSMStandard_2);
      function pop_RW_Bejalen_3(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <th scope="row">Nama_RW</th>\
                        <td class="visible-with-data" id="Nama_RW">' +
          (feature.properties["Nama_RW"] !== null
            ? autolinker.link(feature.properties["Nama_RW"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        var content = removeEmptyRowsFromPopupContent(popupContent, feature);
        layer.on("popupopen", function (e) {
          addClassToPopupIfMedia(content, e.popup);
        });
        layer.bindPopup(content, { maxHeight: 400 });
      }

      function style_RW_Bejalen_3_0(feature) {
        switch (String(feature.properties["Nama_RW"])) {
          case "RW 01":
            return {
              pane: "pane_RW_Bejalen_3",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(213,158,124,1.0)",
              interactive: true,
            };
            break;
          case "RW 02":
            return {
              pane: "pane_RW_Bejalen_3",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(227,26,28,1.0)",
              interactive: true,
            };
            break;
          case "RW 03":
            return {
              pane: "pane_RW_Bejalen_3",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(207,59,150,1.0)",
              interactive: true,
            };
            break;
          case "RW 04":
            return {
              pane: "pane_RW_Bejalen_3",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(30,136,202,1.0)",
              interactive: true,
            };
            break;
        }
      }
      map.createPane("pane_RW_Bejalen_3");
      map.getPane("pane_RW_Bejalen_3").style.zIndex = 403;
      map.getPane("pane_RW_Bejalen_3").style["mix-blend-mode"] = "normal";
      var layer_RW_Bejalen_3 = new L.geoJson(json_RW_Bejalen_3, {
        attribution: "",
        interactive: true,
        dataVar: "json_RW_Bejalen_3",
        layerName: "layer_RW_Bejalen_3",
        pane: "pane_RW_Bejalen_3",
        onEachFeature: pop_RW_Bejalen_3,
        style: style_RW_Bejalen_3_0,
      });
      bounds_group.addLayer(layer_RW_Bejalen_3);
      function pop_RT_Bejalen_4(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <th scope="row">Nama_RT</th>\
                        <td class="visible-with-data" id="Nama_RT">' +
          (feature.properties["Nama_RT"] !== null
            ? autolinker.link(feature.properties["Nama_RT"].toLocaleString())
            : "") +
          "</td>\
                    </tr>\
                </table>";
        var content = removeEmptyRowsFromPopupContent(popupContent, feature);
        layer.on("popupopen", function (e) {
          addClassToPopupIfMedia(content, e.popup);
        });
        layer.bindPopup(content, { maxHeight: 400 });
      }

      function style_RT_Bejalen_4_0(feature) {
        switch (String(feature.properties["Nama_RT"])) {
          case "RT 01":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(232,147,113,1.0)",
              interactive: true,
            };
            break;
          case "RT 02":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(87,115,215,1.0)",
              interactive: true,
            };
            break;
          case "RT 03":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(85,37,215,1.0)",
              interactive: true,
            };
            break;
          case "RT 04":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(67,167,207,1.0)",
              interactive: true,
            };
            break;
          case "RT 05":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(229,120,200,1.0)",
              interactive: true,
            };
            break;
          case "RT 06":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(213,186,87,1.0)",
              interactive: true,
            };
            break;
          case "RT 07":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(203,90,114,1.0)",
              interactive: true,
            };
            break;
          case "RT 08":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(109,227,143,1.0)",
              interactive: true,
            };
            break;
          case "RT 09":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(176,222,61,1.0)",
              interactive: true,
            };
            break;
          case "RT 10":
            return {
              pane: "pane_RT_Bejalen_4",
              opacity: 1,
              color: "rgba(35,35,35,1.0)",
              dashArray: "",
              lineCap: "butt",
              lineJoin: "miter",
              weight: 1.0,
              fill: true,
              fillOpacity: 0.3,
              fillColor: "rgba(165,19,209,1.0)",
              interactive: true,
            };
            break;
        }
      }
      map.createPane("pane_RT_Bejalen_4");
      map.getPane("pane_RT_Bejalen_4").style.zIndex = 404;
      map.getPane("pane_RT_Bejalen_4").style["mix-blend-mode"] = "normal";
      var layer_RT_Bejalen_4 = new L.geoJson(json_RT_Bejalen_4, {
        attribution: "",
        interactive: true,
        dataVar: "json_RT_Bejalen_4",
        layerName: "layer_RT_Bejalen_4",
        pane: "pane_RT_Bejalen_4",
        onEachFeature: pop_RT_Bejalen_4,
        style: style_RT_Bejalen_4_0,
      });
      bounds_group.addLayer(layer_RT_Bejalen_4);
      function pop_UMKMbejalen_3(feature, layer) {
        var popupContent =
          '<table>\
                    <tr>\
                        <th scope="row">id_umkm</th>\
                        <td class="visible-with-data" id="id_umkm">' +
          (feature.properties["id_umkm"] !== null
            ? autolinker.link(feature.properties["id_umkm"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">id_rt</th>\
                        <td class="visible-with-data" id="id_rt">' +
          (feature.properties["id_rt"] !== null
            ? autolinker.link(feature.properties["id_rt"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">id_rw</th>\
                        <td class="visible-with-data" id="id_rw">' +
          (feature.properties["id_rw"] !== null
            ? autolinker.link(feature.properties["id_rw"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">nama_umkm</th>\
                        <td class="visible-with-data" id="nama_umkm">' +
          (feature.properties["nama_umkm"] !== null
            ? autolinker.link(feature.properties["nama_umkm"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">jenis_umkm</th>\
                        <td class="visible-with-data" id="jenis_umkm">' +
          (feature.properties["jenis_umkm"] !== null
            ? autolinker.link(feature.properties["jenis_umkm"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">jam_buka</th>\
                        <td class="visible-with-data" id="jam_buka">' +
          (feature.properties["jam_buka"] !== null
            ? autolinker.link(feature.properties["jam_buka"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">jam_tutup</th>\
                        <td class="visible-with-data" id="jam_tutup">' +
          (feature.properties["jam_tutup"] !== null
            ? autolinker.link(feature.properties["jam_tutup"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">alamat</th>\
                        <td class="visible-with-data" id="alamat">' +
          (feature.properties["alamat"] !== null
            ? autolinker.link(feature.properties["alamat"].toLocaleString())
            : "") +
          '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' +
          (feature.properties["image"] !== null
            ? '<img src="images/' +
              String(feature.properties["image"])
                .replace(/[\\\/:]/g, "_")
                .trim() +
              '">'
            : "") +
          "</td>\
                    </tr>\
                </table><br>" +
          "<button style='padding: 10px 20px; background-color: #17a2b8; color: white; border: none; border-radius: 5px; cursor: pointer;' onclick='keSini(" +
          feature.geometry.coordinates[1] +
          ", " +
          feature.geometry.coordinates[0] +
          ")'>Ke Sini</button>";

        var content = removeEmptyRowsFromPopupContent(popupContent, feature);
        layer.on("popupopen", function (e) {
          addClassToPopupIfMedia(content, e.popup);
        });
        layer.bindPopup(content, { maxHeight: 400 });
      }

      function style_UMKMbejalen_3_0() {
        return {
          pane: "pane_UMKMbejalen_3",
          rotationAngle: 0.0,
          rotationOrigin: "center center",
          icon: L.icon({
            iconUrl: "markers/UMKMbejalen_5.svg",
            iconSize: [30.4, 30.4],
          }),
          interactive: true,
        };
      }
      map.createPane("pane_UMKMbejalen_3");
      map.getPane("pane_UMKMbejalen_3").style.zIndex = 405;
      map.getPane("pane_UMKMbejalen_3").style["mix-blend-mode"] = "normal";
      var layer_UMKMbejalen_3 = new L.geoJson(json_UMKMbejalen_3, {
        attribution: "",
        interactive: true,
        dataVar: "json_UMKMbejalen_3",
        layerName: "layer_UMKMbejalen_3",
        pane: "pane_UMKMbejalen_3",
        onEachFeature: pop_UMKMbejalen_3,
        pointToLayer: function (feature, latlng) {
          var context = {
            feature: feature,
            variables: {},
          };
          return L.marker(latlng, style_UMKMbejalen_3_0(feature));
        },
      });
      bounds_group.addLayer(layer_UMKMbejalen_3);
      map.addLayer(layer_UMKMbejalen_3);

      L.Control.geocoder({
        geocoder: L.Control.Geocoder.nominatim(),
        position: "topleft", // Menentukan posisi geocoder di peta
        defaultMarkGeocode: false, // Tidak menambahkan marker default
        //queryMinLength: 2,  Minimal 2 karakter untuk memulai pencarian
        serviceUrl: 'https://nominatim.openstreetmap.org/search',
      })
      
        .on("markgeocode", function (e) {
          // Menambahkan marker pada lokasi yang ditemukan
          var latlng = e.geocode.center;
          var marker = L.marker(latlng)
            .addTo(map)
            .bindPopup(e.geocode.name)
            .openPopup();

          // Fokus ke lokasi yang ditemukan
          map.setView(latlng, 15);
        })
        .addTo(map);

      var overlaysTree = [
        {
          label: '<img src="legend/UMKMbejalen_5.png" /> UMKM Bejalen',
          layer: layer_UMKMbejalen_3,
        },
        {
          label:
            'RT Bejalen<br /><table><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT011.png" /></td><td>RT 01</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT022.png" /></td><td>RT 02</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT033.png" /></td><td>RT 03</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT044.png" /></td><td>RT 04</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT055.png" /></td><td>RT 05</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT066.png" /></td><td>RT 06</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT077.png" /></td><td>RT 07</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT088.png" /></td><td>RT 08</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT099.png" /></td><td>RT 09</td></tr><tr><td style="text-align: center;"><img src="legend/RT_Bejalen_4_RT1010.png" /></td><td>RT 10</td></tr></table>',
          layer: layer_RT_Bejalen_4,
        },
        {
          label:
            'RW Bejalen<br /><table><tr><td style="text-align: center;"><img src="legend/RW_Bejalen_3_RW011.png" /></td><td>RW 01</td></tr><tr><td style="text-align: center;"><img src="legend/RW_Bejalen_3_RW022.png" /></td><td>RW 02</td></tr><tr><td style="text-align: center;"><img src="legend/RW_Bejalen_3_RW033.png" /></td><td>RW 03</td></tr><tr><td style="text-align: center;"><img src="legend/RW_Bejalen_3_RW044.png" /></td><td>RW 04</td></tr></table>',
          layer: layer_RW_Bejalen_3,
        },
        { label: "OSM Standard", layer: layer_OSMStandard_2, radioGroup: "bm" },
        {
          label: "Google Satellite",
          layer: layer_GoogleSatellite_1,
          radioGroup: "bm",
        },
        { label: "Google Road", layer: layer_GoogleRoad_0, radioGroup: "bm" },
      ];
      var lay = L.control.layers.tree(null, overlaysTree, {
        //namedToggle: true,
        //selectorBack: false,
        //closedSymbol: '&#8862; &#x1f5c0;',
        //openedSymbol: '&#8863; &#x1f5c1;',
        //collapseAll: 'Collapse all',
        //expandAll: 'Expand all',
        collapsed: true,
      });
      lay.addTo(map);
      setBounds();
      var i = 0;
      layer_RW_Bejalen_3.eachLayer(function (layer) {
        var context = {
          feature: layer.feature,
          variables: {},
        };
        layer.bindTooltip(
          layer.feature.properties["Nama_RW"] !== null
            ? String(
                "<div style=\"color: #323232; font-size: 12pt; font-family: 'Arial', sans-serif;\">" +
                  layer.feature.properties["Nama_RW"]
              ) + "</div>"
            : "",
          { permanent: true, offset: [-0, -16], className: "css_RW_Bejalen_3" }
        );
        labels.push(layer);
        totalMarkers += 1;
        layer.added = true;
        addLabel(layer, i);
        i++;
      });
      var i = 0;
      layer_RT_Bejalen_4.eachLayer(function (layer) {
        var context = {
          feature: layer.feature,
          variables: {},
        };
        layer.bindTooltip(
          layer.feature.properties["Nama_RT"] !== null
            ? String(
                "<div style=\"color: #323232; font-size: 10pt; font-family: 'Arial', sans-serif;\">" +
                  layer.feature.properties["Nama_RT"]
              ) + "</div>"
            : "",
          { permanent: true, offset: [-0, -16], className: "css_RT_Bejalen_4" }
        );
        labels.push(layer);
        totalMarkers += 1;
        layer.added = true;
        addLabel(layer, i);
        i++;
      });
      map.addControl(
        new L.Control.Search({
          layer: layer_UMKMbejalen_3,
          initial: false,
          hideMarkerOnCollapse: true,
          propertyName: "nama_umkm",
        })
      );
      document.getElementsByClassName("search-button")[0].className +=
        " fa fa-binoculars";
      resetLabels([
        layer_RW_Bejalen_3,
        layer_RT_Bejalen_4,
        layer_UMKMbejalen_3,
      ]);
      map.on("zoomend", function () {
        resetLabels([
          layer_RW_Bejalen_3,
          layer_RT_Bejalen_4,
          layer_UMKMbejalen_3,
        ]);
      });
      map.on("layeradd", function () {
        resetLabels([
          layer_RW_Bejalen_3,
          layer_RT_Bejalen_4,
          layer_UMKMbejalen_3,
        ]);
      });
      map.on("layerremove", function () {
        resetLabels([
          layer_RW_Bejalen_3,
          layer_RT_Bejalen_4,
          layer_UMKMbejalen_3,
        ]);
      });

      //Rute Analisis
      // Variabel global untuk menyimpan kontrol rute dan peta
      var control;

      // Mendapatkan lokasi pengguna dan menginisialisasi peta
      navigator.geolocation.getCurrentPosition(
        function (position) {
          // Mendapatkan lokasi pengguna
          var userLat = position.coords.latitude;
          var userLng = position.coords.longitude;

          // Tombol untuk memulai rute
          var startRouteBtn = L.control({ position: "topleft" });
          startRouteBtn.onAdd = function () {
            var div = L.DomUtil.create("div", "start-route-btn");
            div.innerHTML =
              '<button id="start-route" style="background-color: #4CAF50; color: white; border: none; padding: 10px 15px; font-size: 14px; cursor: pointer; border-radius: 5px;">Mulai Rute</button>';
            div.style.margin = "25px"; // Margin untuk tombol
            div.style.position = "absolute"; // Posisi absolut
            div.style.top = "0px"; // Posisi atas
            div.style.left = "20px"; // Posisi kiri
            div.style.transform = "translateX(25px)"; // Tidak ada pergeseran horizontal
            return div;
          };
          startRouteBtn.addTo(map);

          // Tombol untuk mengakhiri rute
          var endRouteBtn = L.control({ position: "topleft" });
          endRouteBtn.onAdd = function () {
            var div = L.DomUtil.create("div", "end-route-btn");
            div.innerHTML =
              '<button id="end-route" style="background-color: #f44336; color: white; border: none; padding: 10px 15px; font-size: 14px; cursor: pointer; border-radius: 5px;">Akhiri Rute</button>';
            div.style.margin = "25px"; // Margin untuk tombol
            div.style.position = "absolute"; // Posisi absolut
            div.style.top = "60px"; // Sedikit lebih bawah dari tombol pertama
            div.style.left = "20px"; // Posisi kiri
            div.style.transform = "translateX(25px)"; // Tidak ada pergeseran horizontal
            return div;
          };
          endRouteBtn.addTo(map);

          // Event listener untuk menambahkan efek hover ke tombol
          document.addEventListener("DOMContentLoaded", function () {
            const startRoute = document.getElementById("start-route");
            const endRoute = document.getElementById("end-route");

            // Efek hover untuk tombol "Mulai Rute"
            startRoute.addEventListener("mouseover", function () {
              this.style.backgroundColor = "#45a049";
            });
            startRoute.addEventListener("mouseout", function () {
              this.style.backgroundColor = "#4CAF50";
            });

            // Efek hover untuk tombol "Akhiri Rute"
            endRoute.addEventListener("mouseover", function () {
              this.style.backgroundColor = "#e53935";
            });
            endRoute.addEventListener("mouseout", function () {
              this.style.backgroundColor = "#f44336";
            });
          });

          // Event listener untuk tombol "Mulai Rute"
          document
            .getElementById("start-route")
            .addEventListener("click", function () {
              if (control) {
                // Jika kontrol sudah ada, reset waypointnya
                control.spliceWaypoints(0, 1, L.latLng(userLat, userLng));
              } else {
                // Inisialisasi kontrol rute
                control = L.Routing.control({
                  waypoints: [L.latLng(userLat, userLng)], // Titik awal
                  routeWhileDragging: true,
                  reverseWaypoints: true,
                  showAlternatives: true,
                  position: "topleft",
                }).addTo(map);
              }
            });

          // Event listener untuk tombol "Akhiri Rute"
          document
            .getElementById("end-route")
            .addEventListener("click", function () {
              if (control) {
                map.removeControl(control); // Menghapus kontrol rute dari peta
                control = null;
                alert("Rute telah diakhiri.");
              } else {
                alert("Tidak ada rute yang sedang aktif.");
              }
            });
        },
        function (error) {
          console.error("Geolocation error:", error);
          alert(
            "Tidak dapat mengakses lokasi Anda. Pastikan layanan lokasi diaktifkan."
          );
        }
      );

      // Fungsi keSini untuk menambahkan titik tujuan
      function keSini(Lat, Lng) {
        if (control) {
          var latLng = L.latLng(Lat, Lng);
          control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
        } else {
          alert("Klik 'Mulai Rute' terlebih dahulu.");
        }
      }
    </script>
  </body>
</html>
