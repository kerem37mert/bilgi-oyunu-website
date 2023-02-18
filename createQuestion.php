<?php
require_once("header.php");
?>
    <main>
        <section class="question-title">
            <h1>Soru Oluştur!</h1>
            <p>* Bilgi Oyunu için soru oluşturmaya başla ve topluluğa katıl!</p>
        </section>
        <section class="createQuestion">
            <form id="question">
                <div class="phone-box">
                    <div class="subject">
                        <input id="subjectInput" type="text" placeholder="Konu" autocomplete="off">
                    </div>
                    <div class="question">
                        <input id="questionInput" type="text" placeholder="Soru" autocomplete="off">
                    </div>
                    <div class="answer-big">
                        <div class="answer">
                            <div class="answer-correct-box">
                                <input id="correctInput" type="text" placeholder="Doğru Cevap" autocomplete="off">
                            </div>
                            <div class="answer-box">
                                <input id="answerInput1" type="text" placeholder="Yanlış Cevap" autocomplete="off">
                            </div>
                        </div>
                        <div class="answer">
                            <div class="answer-box">
                                <input id="answerInput2" type="text" placeholder="Yanlış Cevap" autocomplete="off">
                            </div>
                            <div class="answer-box">
                                <input id="answerInput3" type="text" placeholder="Yanlış Cevap" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer">
                    <input id="nameInput" type="text" placeholder="Ad Soyad">
                    <input id="mailInput" type="text" placeholder="E-Posta">
                    <input name="insert" type="submit">
                    <span class="alert" id="txtHint"></span>
                </div>
            </form>
        </section>
    </main>
   <?php require_once("footer.php");