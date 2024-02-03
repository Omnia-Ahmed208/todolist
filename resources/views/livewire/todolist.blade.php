<div>
    <div class="todo d-flex flex-column align-items-center justify-content-center text-center">
        <section class="sec1 d-flex flex-column align-items-center py-4 rounded">
            <div class="img-container w-75 rounded-circle">
                <img src="{{Vite::asset('resources/tools/assets/professional.png')}}" class="img-fluid" alt="">
            </div>
            <div class="disc">
                <h4 class="my-3 fw-bold">Get Organized Your Life</h4>
                <p>Addy is a simple and effective <br> to-do list and task manager app <br> which helps you manage time</p>
                <button class="started-btn btn p-3 px-5 fs-5 fw-bold">
                    <a href=" {{route('todolist.index')}} " class="text-white text-decoration-none">Get Started</a>
                </button>
            </div>
        </section>
    </div>
</div>
