<!DOCTYPE html>
                    <html>
                    <head>
                        <title>Notebook</title>
                        <style>
                            /* Style for the notebook cover */
                            .cover {
                                background-color: #fff;
                               /* background-image: url("https://staging.mycar.gr/wp-content/uploads/2023/11/car7.jpg"); */
                                width: 200px;
                                height: 300px;
                                border: 2px solid #000;
                                padding: 20px;
                                margin: 20px;
                            }
                            
                            /* Style for the notebook pages */
                            .page {
                                background-color: #fff;
                                width: 180px;
                                height: 280px;
                                border: 1px solid #ccc;
                                margin: 5px;
                            }
                        </style>
                    </head>
                    <body>

                    <!-- Front cover -->
                    <div class="cover" >

                        <h1>Front Cover</h1>
                    </div>

                    <!-- Pages -->
                    <div>

                    <?php 
                    for ($i = 1; $i <= 10; $i++) { ?>
                       <div class="page">
                            <h2>Page <?php  echo $i ?></h2>
                            <p>Your content here...</p>
                        </div>
                  <?php  }

                    ?>
                  </div>
                
                   <!-- Back cover -->
                <div class="cover">
                    <h1>Back Cover</h1>
                </div>
                
                </body>
                </html>