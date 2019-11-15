						<?php
                        session_start();
                        include 'config.php';
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        if ($username == '') {
                            $_SESSION['pesan'] = 'Username tidak boleh kosong!';
                            header('location:masuk.php');
                        } else if ($password == '') {
                            $_SESSION['pesan'] = 'Password tidak boleh kosong!';
                            header('location:masuk.php');
                        } else {
                            $data = mysqli_query($mysqli, "SELECT * FROM akun WHERE username='$username' and password='$password'");
                            $cek = mysqli_num_rows($data);
                            if ($cek > 0) {
                                $reks = mysqli_fetch_assoc($data);
                                $_SESSION['username'] = $username;
                                $_SESSION['nama'] = $reks['nama'];
                                $_SESSION['status'] = "login";
                                header('location:halaman.php');
                            } else {
                                $_SESSION['pesan'] = 'Username atau Password salah!';
                                header('location:masuk.php');
                            }
                        }

                        ?>