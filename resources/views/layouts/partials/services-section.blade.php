<div class="site-section" id="services-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
                <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                    <h2>{{ __('Services') }}</h2>
                    <p>{{ __('The basis for any successful business is a creative and distinct idea, hence the launch of Luxury Horizon to be the place you trust to take care of your car. In 3M more than one service in one place, this in itself is another sign of excellence.') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div v-for="item in services" class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="">
                <div class="block__35630">
                    <div class="icon mb-3">
                        <span class="fas fa-award"></span>
                    </div>
                    <h3 class="mb-3 text-white">@{{ item.name }}</h3>
                    @{{ item.desc }}
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
                services: {!! \App\Models\Service::query()->select(['name', 'desc'])->get() !!}
            }
        }
    });
</script>
