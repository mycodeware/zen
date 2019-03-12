@extends('layouts.app')

@section('content')
<div class="container-fluid bg-white">
    <div class="px-3 px-md-5 py-3 py-md-5">
        <div>
            <div class="lead my-3">{{ __('Frequently Asked Questions') }}</div>
            <div class="strong h6 my-3">{{ __('About ZenVentures') }}</div>
            <ul class="mb-5 small">
                <li>{{ __('When and where was ZenVentures founded?') }}
                    <p class="mt-2">{{ __('ZenVentures was founded by And Africa Co., Ltd. in December 2018.  And Africa Co., Ltd. is a consultancy and investment advisory firm registered in Tokyo, Japan with a branch office in Johannesburg, South Africa.') }}</p>
                </li>
                <li>{{ __('How do I contact ZenVentures?') }}
                    <p class="mt-2">{{ __('Please visit our contact page to see our office address, telephone number and online contact form.') }}</p>
                </li>
                <li>{{ __('How do I partner with ZenVentures?') }}
                    <p class="mt-2">{{ __('Please register to our platform first, and then contact us directly via the contact page for further information about any partnerships.') }}</p>
                </li>
                <li>{{ __('Does ZenVentures conduct any pitching events?') }}
                    <p class="mt-2">{{ __('Yes, ZenVentures will be holding selective pitching events in Johannesburg, South Africa. Please contact us directly or subscribe to our platform for further information regarding the date and details of any pitching events.') }}</p>
                </li>
                <li>{{ __('Who can use the ZenVentures platform?') }}
                    <p class="mt-2">{{ __('The ZenVentures platform can be used by anyone from companies, to entrepreneurs, to individual investors, funds, and job hunters.  Its primary role is to match Japanese and other developed country companies and investors with African startups, entrepreneurs and skilled individuals.') }}</p>
                </li>
                <li>{{ __('Which countries does ZenVentures operate in?') }}
                    <p class="mt-2">{{ __('We currently have a physical presence in Japan and South Africa. As ZenVentures is primarily an online platform, users from any country are free to register and subscribe to the service and we intend to expand our reach to other African and developed countries to become the main bridge between African countries and developed world investors.') }}</p>
                </li>
                <li>{{ __('Is the ZenVentures platform free?') }}
                    <p class="mt-2">{{ __('The first three months after launch will be a free trial period, after which a subscription fee will be charged to users of the platform.') }}</p>
                </li>
                <li>{{ __('Will ZenVentures invest in my company?') }}
                    <p class="mt-2">{{ __('No. We are not an investment firm – ZenVentures is a platform connecting Japanese and other developed country investors with African startups, entrepreneurs and skilled individuals.') }}</p>
                </li>
            </ul>
            <div class="strong h6 my-3">{{ __('For Investors') }}</div>
            <ul class="mb-5 small">
                <li>{{ __('Why should I sign up for ZenVentures?') }}
                    <p class="mt-2">{{ __('ZenVentures is the first curated platform for connecting investors in Japan with African startups and entrepreneurs. Investors can gain the following benefits from joining the ZenVentures platform:') }}</p>
                    <ol>
                        <li>{{ __('Access to a unique and curated selection of African startups, entrepreneurs and talented individuals managed by a company with deep and extensive knowledge of both the needs of Japanese companies and investors and the capacity to identify and curate promising African startups and entrepreneurs.') }}</li>
                        <li>{{ __('A personalised matchmaking process – we can directly match investors with African startups and entrepreneurs based on sector, financing requirements, and other qualifying criteria.') }}</li>
                        <li>{{ __('Access to a database of skilled employees. We aim to mitigate the challenge of finding skilled human capital in African countries by directly matching investors and business with a database of skilled workers and university graduates.') }}</li>
                    </ol>
                    <p></p>
                </li>
                <li>{{ __('How does ZenVentures interact with investors?') }}
                    <ol class="mt-2">
                        <li>{{ __('Registration.  The first step is for you to register to our platform. This allows you to browse our database and search for startups, entrepreneurs or individuals you are interested in.') }}</li>
                        <li>{{ __('Request contact or further information. At this point you can request to directly contact or receive more detailed information on a startup, entrepreneur or individual you are interested in.') }}</li>
                        <li>{{ __('Creating a commitment. At this stage you have two options. You can either continue private discussions separate from ZenVentures platform after the initial matchmaking, or you can request ZenVentures to conduct further due diligence mediation or matchmaking work on your behalf.') }}</li>
                    </ol>
                    <p></p>
                </li>
                <li>{{ __('What does ZenVentures charge to investors?') }}
                    <ol class="mt-2">
                        <li>{{ __('After the initial three-month trial period, we charge a subscription fee of JPY 18 – 30 per month for access to our platform and database of investors, startups, entrepreneurs and individuals.') }}</li>
                        <li>{{ __('For standard matchmaking services between interested investors/companies and startups/entrepreneurs/individuals there is no charge other than the standard subscription fee.') }}</li>
                        <li>{{ __('For any further due diligence, in-depth research, detailed matchmaking about 5 to 10 % fee will charge based on the value of the final deal reached by the investor and related parties.') }}</li>
                    </ol>
                    <p></p>
                </li>
            </ul>
            <div class="strong h6 my-3">{{ __('For Startups / Entrepreneurs / Individuals') }}</div>
            <ul class="mb-5 small">
                <li>{{ __('Why should I sign up for ZenVentures?') }}
                    <p class="mt-2">{{ __('ZenVentures is the first integrated platform providing direct matching services between Japanese and other developed country investors with startups, entrepreneurs and individuals across Africa. By signing up to the platform you can expect the following benefits:') }}</p>
                    <ol>
                        <li>{{ __('Access to a large pool of interested investors with a deep pool of capital, knowledge and technology.') }}</li>
                        <li>{{ __('A curated platform that aims to find the best match for your company or product.') }}</li>
                        <li>{{ __('The potential to find employment at major Japanese companies, either doing business in Africa or interested in hiring African employees for their Japanese operations.') }}</li>
                    </ol>
                    <p></p>
                </li>
                <li>{{ __('How does ZenVentures support startups/entrepreneurs/individuals?') }}
                    <p class="mt-2">{{ __('We support startups in the following ways:') }}</p>
                    <ol>
                        <li>{{ __('We provide access to a database of Japanese and other developed country companies and investors.') }}</li>
                        <li>{{ __('We proactively support you in your matching process, whether you are searching for investment, employment or non-financial support.') }}</li>
                        <li>{{ __('We bridge the trust and information barrier between startups, entrepreneurs and individuals in African countries, and developed country investors through our platform by providing information, communication and any required vetting to all parties using our platform.') }}</li>
                    </ol>
                    <p></p>
                </li>
                <li>{{ __('How do I create a good profile?') }}
                    <p class="mt-2">{{ __('Be clear and succinct with the information on your profile.  If you are seeking funding, indicate the round of investment – Angel/Seed/Series A etc., provide a 2-3 sentence description of your company vision and product, your field of business, as well as any additional basic information about your business.') }}</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
