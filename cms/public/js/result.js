// googleMapsAPIを持ってくるときに,callback=initMapと記述しているため、initMap関数を作成
function initMap() {
    // welcome.blade.phpで描画領域を設定するときに、id=mapとしたため、その領域を取得し、mapに格納します。
    map = document.getElementById("map");
    // 東京タワーの緯度は35.6585769,経度は139.7454506と事前に調べておいた
    let TACHIBANASTREETSTORE = {lat: 34.73839, lng: 135.399103};
    // オプションを設定
    opt = {
        zoom: 18, //地図の縮尺を指定
        center: TACHIBANASTREETSTORE, //センターを東京タワーに指定
    };
    // 地図のインスタンスを作成します。第一引数にはマップを描画する領域、第二引数にはオプションを指定
    mapObj = new google.maps.Map(map, opt);
    
    // マーカー追加
    marker = new google.maps.Marker({
        // ピンを差す位置を決めます。
        position: TACHIBANASTREETSTORE,
	// ピンを差すマップを決めます。
        map: mapObj,
	// ホバーしたときに「TACHIBANA STREET STORE」と表示されるようにします。
        title: 'TACHIBANA STREET STORE',
    });
}