<x-master>
    <section id="add_category" class="container bg-light shadow mt-5 p-5">
        <h3 class="mb-3">Edit Profile</h3>
        <div class="edit_course">
            <form action="" method="post">
                <div class="mb-3">
                    <x-forms.input type="text" name="name" :value="old('name', $user->name)" placeholder="Enter Name" required
                        label="Name" />
                     </div>
                <div class="mb-3">
                    <label for="Contact" class="form-label">Contact</label>
                    <input type="number" value="01843080023" name="Contact" class="form-control" id="Contact" />
                </div>
                <div class="mb-3">
                    <x-forms.input type="text" name="address" :value="old('address', $user->profile->address)" placeholder="Enter Name" required
                        label="Name" />
                </div>
                <button  type="submit" class="btn btn-primary w-25">Update Profile</button>
            </form>
        </div>
    </section>
</x-master>
