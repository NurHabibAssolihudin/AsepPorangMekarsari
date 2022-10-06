<div class="container mt-3">
    <section class="jumbotron text-center">
        <img src="#" alt="APM" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">About AsepPorangMekarsari</h1>
        <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, voluptatibus corporis hic laborum veritatis quaerat quidem vitae pariatur delectus reiciendis? Sapiente ad error deleniti provident ipsa dicta, quidem dolores labore at, numquam aperiam distinctio soluta consectetur similique ipsum nemo quaerat fuga expedita cum iure ratione eius. Esse nulla, quibusdam, quia maxime nostrum voluptatum ab aperiam ipsa nemo dicta exercitationem unde alias. Veniam officiis fugit sapiente recusandae distinctio ex odio molestiae, eveniet veritatis minus commodi sit voluptas dolor obcaecati voluptatum error aliquid et optio nisi. Cumque unde corrupti porro consectetur sit aliquam eum laboriosam at aspernatur ea accusamus fugiat neque facere numquam perferendis minus ratione modi adipisci aperiam aliquid accusantium magni velit, exercitationem perspiciatis. Officiis minus exercitationem, officia, odit nam mollitia, modi dignissimos incidunt eos quod iste ullam nesciunt quibusdam est asperiores iure et cumque. Praesentium iusto fuga vel fugiat voluptatum. Aperiam voluptatibus, impedit tenetur accusamus voluptatum voluptas. Quo sunt a error possimus perspiciatis quae, delectus vel enim, maxime soluta accusamus ducimus at id accusantium? Quis corrupti commodi optio obcaecati incidunt natus porro praesentium accusantium consequatur provident eligendi nulla, quibusdam rerum iste illo nesciunt tenetur facere quia repellat minus excepturi placeat! Ea provident est architecto placeat sunt quam esse possimus quaerat!</p>
    </section>
    <div class="b-example-divider"></div>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="col-md-10 mx-auto col-lg-10">
            <form class="p-4 p-md-5 border rounded-3 bg-light" action="<?php if (isset($_GET['kirim'])) {
                                                                            $name = $_GET['name'];
                                                                            $pesan = $_GET['pesan'];
                                                                            $liang = 'https://api.whatsapp.com/send/?phone=6281312953747&text=Halo%2C+saya+' . $name . '+' . $pesan . '&type=phone_number&app_absent=0';

                                                                            return $liang;
                                                                        }  ?>" method="get">
                <caption>
                    <h5 class="text-center mb-3">Kontac Via WhatsUp</h5>
                </caption>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="nama" name="name">
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="pesan" placeholder="pesan" name="pesan"></textarea>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="kirim" value="true">
                    Kontac
                </button>
                <hr class=" my-4">
                <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                <!-- 6285771793911 -->
            </form>
        </div>
    </div>
</div>
<script>
</script>