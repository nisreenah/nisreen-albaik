<style>
    .modal {
        background-color: rgba(0,0,0,0.9);
        text-align: center;
        margin: auto;
        height: 70vh;
        width: 60vw;
        padding: 4rem;
    }

    @media (max-width: 776px) {
      .modal {
          height: 40vh;
          width: 100vw;
      }
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .course-info {
        text-align: center;
        margin-top: 10px;
    }

</style>

<div class="block-content">
    <h3 class="block-title">Courses</h3>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-lg-4 col-sm-4">
                <img class="courseImg" src="{{ asset('storage/upload/courses/'. $course->image) }}"
                     style="width: 100%; height: 200px; object-fit: cover;     cursor: pointer;" alt="{{ $course->en_title }}">
                <div class="course-info">
                    <h4>{{ $course->en_title }}</h4>
                    <p>{{ $course->year }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>


<script>
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    document.querySelectorAll('.courseImg').forEach(img => {
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
    });

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    };

</script>
