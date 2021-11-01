<div class="site-section" id="services-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
{{--                data-aos="fade-up"--}}
                <div class="block-heading-1" data-aos-delay="">
                    <h2>{{ __('Services') }}</h2>
                    <p>{{ __('The basis for any successful business is a creative and distinct idea, hence the launch of Luxury Horizon to be the place you trust to take care of your car. In 3M more than one service in one place, this in itself is another sign of excellence.') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
{{--            data-aos="fade-up"--}}
            <div v-for="item in services" class="col-md-6 col-lg-4 m-0 p-0" data-aos-delay="">
                <div class="card rounded-0 border-0">
                    <img v-if="item.photo" v-bind:src="item.photo" class="card-img-top rounded-0" width="180px" height="200px">
                    <img v-else src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="card-img-top rounded-0" width="180px" height="200px">

                    <div class="card-body position-absolute mt-auto h-100 d-flex align-items-end p-0 w-100">
                        <div class="d-flex flex-column px-2 w-100"
                             style="background-image: linear-gradient(to right, #000, #3330);">
                            <p class="card-title fw-bold text-white m-0">@{{ item.name }}</p>
                            <p class="card-text text-white lh-sm mb-2">@{{ item.desc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script>
    const e = new Vue({
        el: '#services-section',
        data() {
            return {
                services: {!! \App\Models\Service::query()->select(['name', 'desc', 'photo'])->get() !!}
            }
        }
    });
</script>
