<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />

    <style>
      .problem-solution,
      .vision {
        position: relative;
      }

      .book {
        width: 100%;
        padding-top: 6%;
      }

      .db {
        position: relative;
        left: 30%;
        top: 5%;
      }

      .problem-solution img,
      .vision img {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        opacity: 0.3;
        width: 100%;
        height: 100%;
      }

      .problem-solution p,
      .problem-solution h2,
      .problem-solution li {
        font-weight: bolder;
        z-index: 2;
      }

      .see-more {
        position: relative;
        width: 40%;
        left: 30%;
      }
      .logo {
        position: relative;
        width: 14%;
        left: 47%;
      }
    </style>

    <title>Samajbandh</title>
  </head>

  <body>
    <div class="container-fluid">
      <?php
        // include "includes/header.php";
        ?>
      <div class="row">
        <div class="col">
          <img class="logo" src="logo.png" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col" style="background-color: #f8efed">
          <h5 class="text-center m-4">
            Samajbandh is a non-profit social organisation based in Pune working
            in various tribal and rural areas of Maharashtra since 2016
          </h5>
          <h5 class="text-center m-4">
            You too have a stake in this collective responsibility to contribute
            now.
          </h5>
        </div>
      </div>
      <div class="row bg-danger">
        
      </div>
      <div class="row bg-danger">
        <div class="col-sm-6">
            <h3 class="text-center m-4 text-light">आरोग्य संवादक Fellowship 2023 प्रवेश अर्ज</h3>
            <h5 class="text-center m-4 text-light" >मासिक पाळी या विषयावर समाजबंध सोबत आपल्या भागात प्रबोधनाचे काम करू इच्छिणाऱ्या कार्यकर्त्यांसाठी सुवर्णसंधी</h5>
            <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSeFlcGoNVcXODn3XIZ4VmOz31id8zSIkDd6zXnAyEq1eO1E3w/viewform"
            type="button"
            target="_blank"
            class="btn db btn-warning m-4 px-4"
            >Apply Now</a
          >
        </div>
        <div class="col-sm-6">
            <h3 class="text-center m-4 text-light">सत्याचे प्रयोग शिबीर तिसरे</h3>
            <h5 class="text-center m-4 text-light" >भामरागड, जि. गडचिरोली येथील आदिवासी गावांमध्ये ७ दिवस राहून मासिक पाळी व महिला आरोग्यावर  समाजबंध संस्थेसोबत Ground Level वर काम करण्याची संधी. अधिक माहिती व नोंदणीसाठी</h5>
            <a
            href="https://docs.google.com/forms/d/e/1FAIpQLScagUevTX5GJVaUUUGazq1YOiTOl5RUBlIZZenvLzpH5XlMYg/viewform"
            type="button"
            target="_blank"
            class="btn db btn-warning m-4 px-4"
            >Apply Now</a
          >
        </div>

      </div>
      <div class="row bg-danger">
        <h3 class="text-center m-4 text-light">मासिक पाळी सर्वेक्षण</h3>
      </div>
      <div class="row bg-danger">
        <div class="col-sm-6">
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSfzXgBHwOpuiEqkChrVzMN913axYyJLZQ6djkypSwNbD5n-YA/viewform?usp=sf_link"
            type="button"
            target="_blank"
            class="btn db btn-warning m-4 px-4"
            >महिलांसाठी</a
          >
        </div>
        <div class="col-sm-6">
          <a
            href="https://docs.google.com/forms/d/e/1FAIpQLSeoDHgufy8RAT3DQYVu1T9zZ0tjvQW2r5QKa2ktnkPazEfNnA/viewform?usp=sf_link"
            type="button"
            target="_blank"
            class="btn db btn-warning m-4 px-4"
            >पुरुषांसाठी</a
          >
        </div>
      </div>      
      <div class="row bg-danger">
        <h3 class="text-center m-4 text-light">समाजबंध कार्यकर्ता नोंदणी</h3>
      </div>
      <div class="row bg-danger">
        <div class="col-sm text-center">
          <a
            href="https://forms.gle/cHHSRKmw4ZmXjG7i7"
            type="button"
            target="_blank"
            class="btn db btn-warning m-4 px-4"
            >Join Samajbandh</a
          >
        </div>
      </div>
      <div class="row" style="background-color: #f8efed">
        <div class="col">
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Antyodaya Prakalp, Hemadi, Raigad</h5>
                  <!-- <p>Some representative placeholder content for the first slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="2.png" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <!-- <h5>Second slide label</h5> -->
                  <!-- <p>Some representative placeholder content for the second slide.</p> -->
                </div>
              </div>
              <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Incorporated in Antyodaya National Report</h5>
                  <p>Publushed by: Vice President of India</p>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col" style="background-color: #ff69b4">
          <h1 class="vision text-center">Our Vision</h1>
          <h3>
            To live in a society where menstruation is considered as a natural
            process and all women are able to take proper rest, nutrition and
            maintain hygiene in periods.
          </h3>
        </div>
      </div>
      <div class="row py-4" style="background-color: #f2ed82">
        <h1 class="text-center m-3 text-decoration-underline">Get Free Book</h1>
        <div class="col-sm-6">
          <img src="bookc.png" alt="" class="book" />
          <a
            href="te pach divas.pdf"
            download
            type="button"
            class="btn db btn-outline-danger mx-4 mb-4 px-4"
            >Download Free E-Book</a
          >
        </div>
        <div class="col-sm-6">
          <img src="bookd.png" alt="" class="book" />
          <a
            href="p palicha.pdf"
            download
            type="button"
            class="btn db btn-outline-danger mx-4 mb-4 px-4"
            >Download Free E-Book</a
          >
        </div>
      </div>
      <div class="row py-4" style="background-color: #f7ed82">
        <h1 class="text-center m-3 text-decoration-underline">
          Media Coverage
        </h1>
        <div class="col-sm-6">
          <h3 class="text-center m-3">ANI News</h3>
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/TUUBWIALznU"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <div class="col-sm-6">
          <h3 class="text-center m-3">Doordarshan</h3>
          <div class="ratio ratio-16x9">
            <iframe
              src="https://www.youtube.com/embed/VOPyx5UzZww"
              title="YouTube video"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        <!-- <div class="row">
                <div class="col-sm-12">
                    <a href="media-coverage.php" type="button" class="btn btn-outline-danger mt-3 see-more">See More..</a>
                </div>
            </div> -->
      </div>
      <div class="row">
        <div class="col-sm-6 problem-solution">
          <h2 class="text-center">Problem</h2>
          <p>
            In India even today
            <u>
              82% of women don't use hygienic menstrual products/ pads in
              menstrual cycle</u
            >, causing urinary tract, reproductive tract infections which leads
            to early age hysterectomy and at times even cervical cancer. We
            found three major reasons behind this:
          </p>
          <ol>
            <li>
              <u> Lack of awareness</u> and lack of scientific information about
              menses.
            </li>
            <li>
              Available menstrual <u> pads are not affordable </u> to rural -
              tribal woman & girls.
            </li>
            <li><u> Pad is not accessible</u> to them.</li>
          </ol>
          <p>
            This is not only affecting women’s health but it’s affecting
            adolescent girls too; due to above reasons, up to 42% that means
            <u>
              2.3crore school girls drop out from schooling in India per year</u
            >. The girls who don’t drop out, usually miss 5 days of school every
            month.
          </p>
          <img src="4.jpg" />
        </div>
        <div class="col-sm-6 problem-solution">
          <h2 class="text-center">Solution</h2>
          <p>
            To tackle with this basic issue, Samajbandh has designed a ‘P FOR
            PERIODS’- menstrual health management awareness session and ‘ASHA
            CLOTH PAD’ product which can be made by any ordinary woman in her
            home by using old clothes. We in our project in Gagode, make such
            pads to distribute it in such remote areas as free samples. It also
            generates employment to local needy women making them independent.
          </p>
          <p>Thus, Samajbandh works in three stages:-</p>
          <ol>
            <li>Creating awareness about menstruation.</li>
            <li>Developing scientific approach towards menstruation.</li>
            <li>
              To give them a sustainable option to use during menstruation.
            </li>
          </ol>

          <img src="5.jpg" />
        </div>
      </div>

      <div class="bg-danger bg-gradient text-light">
        <div class="row">
          <div class="col px-5">
            <h3><u> Disclaimer:</u></h3>
            <p>
              No third-party agency is working on behalf of Samajbandh for any
              kind of recruitment, fundraising campaign, workshops, or
              activities that are conducted by the organization. Please beware
              of unauthorized claims or messages that are disseminated by anyone
              on behalf of Samajbandh. If you find any such instances, please
              contact us directly for confirmation and instant action.
            </p>
            <p>
              We do not charge any money from people for the activities and
              events that are managed by us. So if you come across any such
              claims of monetary demand by an individual or organization on
              behalf of our name, reach out to us
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5 p-5">
            <h3><u>Contact us</u></h3>
            <div class="pb-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-geo-alt-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"
                />
              </svg>
              <h6 class="d-inline">Hemdi, Raigad 402107</h6>
            </div>
            <div class="py-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-envelope-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"
                />
              </svg>
              <h6 class="d-inline">samajbandhindia@gmail.com</h6>
            </div>
            <div class="pt-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-telephone-outbound-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"
                />
              </svg>
              <h6 class="d-inline">+91 7709488286</h6>
            </div>
          </div>
          <div class="col-sm-7 p-5">
            <h3><u>Write to us </u></h3>
            <form>
              <div class="mb-3">
                <input
                  type="text"
                  placeholder="Name*"
                  required
                  class="form-control"
                  id="name"
                />
              </div>
              <div class="mb-3">
                <input
                  type="text"
                  placeholder="Mobile No*"
                  required
                  class="form-control"
                  id="mobile"
                />
              </div>
              <div class="mb-3">
                <input
                  type="email"
                  placeholder="Email Id"
                  class="form-control"
                  id="email"
                  aria-describedby="emailHelp"
                />
                <div id="emailHelp" class="">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <textarea
                  class="form-control"
                  placeholder="Message*"
                  required
                  id="message"
                  rows="4"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
