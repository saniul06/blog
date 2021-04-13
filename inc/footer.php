</div>

<div class="footersection templete clear">
  <div class="footermenu clear">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="#">Privacy</a></li>
    </ul>
  </div>
  <?php $query = "select * from tbl_footer";
  $result = $db->select($query);
  if ($result) {
    while ($data = $result->fetch_assoc()) { ?>
  <p>&copy; <?php echo $data['copyright']; ?>.<?php echo date('Y'); ?></p>
  <?php   }
  } ?>
</div>
<div class="fixedicon clear">
  <?php $query = "select * from tbl_social";
  $result = $db->select($query);
  if ($result) {
    while ($data = $result->fetch_assoc()) { ?>
      <a href="<?php echo $data['facebook']; ?>" target="_blank"><img src="images/fb.png" alt="Facebook" /></a>
      <a href="<?php echo $data['twitter']; ?>" target="_blank"><img src="images/tw.png" alt="Twitter" /></a>
      <a href="<?php echo $data['linkedin']; ?>" target="_blank"><img src="images/in.png" alt="LinkedIn" /></a>
      <a href="<?php echo $data['googleplus']; ?>" target="_blank"><img src="images/gl.png" alt="GooglePlus" /></a>
  <?php   }
  } ?>
</div>
<script type="text/javascript" src="js/scrolltop.js"></script>
</body>

</html>