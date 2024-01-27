<x-master>
    <section id="profile" class="bg-light mx-auto pt-2 pb-2">
        <h3 class="fw-3 pt-5 text-center">Profile Information</h3>
        <hr />
        <div class="profile bg-light mx-auto p-5 row">
            <div class="text-center p-5 col-md-4 text-center rounded me-4 shadow">
                <img style="width: 200px; height: 200px; border-radius: 50%" src="{{ asset('assets/images/rishad.jpg') }}"
                    alt="" />
                <p class="fw-bolder fs-5 pt-2">{{Auth::user()->name }}</p>
                <span>{{Auth::user()->email }}</span>
                <br />
                <span>Bangladesh</span>
                <ul class="d-flex justify-content-center ps-3 pe-3 fs-4" style="list-style: none">
                    <li><i class="fa-brands fa-facebook pe-2"></i></li>
                    <li><i class="fa-brands fa-whatsapp pe-2"></i></li>
                    <li><i class="fa-brands fa-instagram pe-2"></i></li>
                </ul>
            </div>
            <div class="col-md-7">
                <table class="table table-striped p-3" style="height: 400px; width: 600px">
                    <tbody>
                        <tr>
                            <td>Name </td>
                            <th scope="row">{{Auth::user()->name }}</th>
                        </tr>
                        <tr>
                            <td>Role </td>
                            <th scope="row">{{Auth::user()->role->name}}</th>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <th scope="row">{{Auth::user()->email }}</th>
                        </tr>
                        <tr>
                            <td>Contact </td>
                            <th scope="row">01843080023</th>
                        </tr>
                        <tr>
                            <td>Address </td>
                            <th scope="row">{{Auth::user()->profile->address }}</th>
                        </tr>
                        <tr>
                            <td>Status </td>
                            <th scope="row">Active</th>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('profile.edit') }}" type="button" class="btn btn-primary w-25 d-none">Edit Profile</a>

            </div>
        </div>
    </section>
</x-master>
