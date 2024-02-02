<footer class="row">
       
        
          <div class="col-md-4">Email-chalani23000@student.hamk.fi</div>
          <div class="col-md-4">Computer Application</div>
          <div class="col-md-4"> HAMK</div>
        
      </div>

      <?php
       
       $filename = basename($_SERVER['PHP_SELF']);
       $modified_time = date("F d Y H:i:s.", filemtime($filename));
       echo $filename . " was last modified: " . $modified_time;

      ?>

    </footer>

</div> <!--containet -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>