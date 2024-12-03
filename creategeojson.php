<?php
header('Content-Type: application/json');

// File koneksi ke PostgreSQL (diasumsikan sudah dibuat)
require('koneksi.php');

// Query untuk mengambil data geospasial dari tabel "indo_prov_2016"
$sql = "SELECT ST_AsGeoJSON(geom) As geometry, id_umkm, id_rt, id_rw, nama_umkm, jenis_umkm, jam_buka, jam_tutup, alamat, image FROM umkm_bejalen";
$result = $conn->query($sql);

// Menyiapkan struktur JSON untuk menyimpan hasil query
$geojson = array(
    'type' => 'FeatureCollection',
    'name' => 'UMKMbejalen_3',
    'crs' => array(
        'type' => 'name',
        'properties' => array(
            'name' => 'urn:ogc:def:crs:OGC:1.3:CRS84'
        )
    ),
    'features' => array()
);

// Sesuaikan juga dengan nama kolom di PostGIS
foreach ($result as $row) {
    $feature = array(
        'type' => 'Feature',
        'properties' => array(
            'id_umkm' => $row["id_umkm"],
            'id_rt' => $row["id_rt"], 
            'id_rw' => $row["id_rw"], 
            'nama_umkm' => $row["nama_umkm"],
            'jenis_umkm' => $row["jenis_umkm"],
            'jam_buka' => $row["jam_buka"],
            'jam_tutup' => $row["jam_tutup"],
            'alamat' => $row["alamat"],
            'image' => $row["image"]
        ),
        'geometry' => json_decode($row["geometry"], true)
    );

    array_push($geojson['features'], $feature);
}


// Decode array menjadi JSON, tampilkan hasilnya ke browser
echo json_encode($geojson);


$myfile = fopen("data/UMKMbejalen_3.js", "w") or die("Unable to open file!");
$txt = "var json_UMKMbejalen_3 = "; // Sesuaikan nama var dengan file json yang digunakan di
fwrite($myfile, $txt);
$txt = json_encode($geojson); // Decode array menjadi json, simpan menjadi file .js
fwrite($myfile, $txt);
fclose($myfile);
?>