<html>
<head>
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
</head>
<body>

<script>

</script>

<a-scene stats background="color:#7ec0ee;">

  <!-- Asset management system. -->
  <a-assets>
    <a-asset-item id="angel-lyft" src="angel-lyft/lyft.glb"></a-asset-item>
    <a-asset-item id="engine_left" src="angel-lyft/left_engine.glb"></a-asset-item>
    <a-asset-item id="engine_right" src="angel-lyft/right_engine.glb"></a-asset-item>
  </a-assets>

  <!-- Control -->
  <a-entity oculus-go-controls="hand: right"></a-entity>
  <a-entity laser-controls="hand: right"></a-entity>

  <!-- Camera -->
  <a-camera>
    <a-cursor></a-cursor>
  </a-camera>

  <!-- Scene -->
  <a-gltf-model position="0 1 -4" src="#angel-lyft"></a-gltf-model>
  <a-gltf-model position="2 1 -4" src="#engine_left"></a-gltf-model>
  <a-gltf-model position="-2 1 -4" src="#engine_right"></a-gltf-model>
  <a-plane position="0 0 -4" rotation="-90 0 0" width="40" height="40" color="#7BC8A4"></a-plane>

</a-scene>

</body>
</html>
