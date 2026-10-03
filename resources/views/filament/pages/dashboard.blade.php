<x-filament-panels::page>
    <div class="space-y-6">

        {{-- Welcome --}}
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-white/10 dark:bg-gray-900">
            <h2 class="text-xl font-semibold text-gray-950 dark:text-white">
                Selamat Datang, {{ auth()->user()->name }}
            </h2>

            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Kelola konten dan informasi Company Profile SPKD dari dashboard ini.
            </p>
        </div>


        {{-- Statistics --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            {{-- Accreditations --}}
            <a
                href="{{ route('filament.admin.resources.accreditations.index') }}"
                class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-primary-500 hover:shadow-md dark:border-white/10 dark:bg-gray-900"
            >
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Accreditations
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-950 dark:text-white">
                    {{ $accreditationsCount }}
                </p>

                <p class="mt-3 text-xs text-gray-500">
                    View accreditations →
                </p>
            </a>


            {{-- Compliances --}}
            <a
                href="{{ route('filament.admin.resources.compliances.index') }}"
                class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-primary-500 hover:shadow-md dark:border-white/10 dark:bg-gray-900"
            >
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Compliances
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-950 dark:text-white">
                    {{ $compliancesCount }}
                </p>

                <p class="mt-3 text-xs text-gray-500">
                    View compliances →
                </p>
            </a>


            {{-- News --}}
            <a
                href="{{ route('filament.admin.resources.news.index') }}"
                class="rounded-xl border border-gray-200 bg-white p-5 shadow-sm transition hover:border-primary-500 hover:shadow-md dark:border-white/10 dark:bg-gray-900"
            >
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    News
                </p>

                <p class="mt-2 text-3xl font-bold text-gray-950 dark:text-white">
                    {{ $newsCount }}
                </p>

                <p class="mt-3 text-xs text-gray-500">
                    View news →
                </p>
            </a>

        </div>


        {{-- Website Content --}}
        <div class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm dark:border-white/10 dark:bg-gray-900">

            <div class="border-b border-gray-200 px-6 py-5 dark:border-white/10">
                <h3 class="text-base font-semibold text-gray-950 dark:text-white">
                    Website Content
                </h3>

                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                    Overview of important company profile content.
                </p>
            </div>


            <div class="divide-y divide-gray-200 dark:divide-white/10">

                {{-- Homepage Hero --}}
                <div class="flex items-center justify-between px-6 py-4">

                    <div>
                        <p class="text-sm font-medium text-gray-950 dark:text-white">
                            Homepage Hero
                        </p>

                        <p class="mt-1 text-xs text-gray-500">
                            Main homepage banner
                        </p>
                    </div>

                    @if ($hasHomepageHero)
                        <span class="inline-flex items-center rounded-full bg-green-500/10 px-3 py-1 text-xs font-medium text-green-500">
                            Active
                        </span>
                    @else
                        <span class="inline-flex items-center rounded-full bg-gray-500/10 px-3 py-1 text-xs font-medium text-gray-400">
                            Not configured
                        </span>
                    @endif

                </div>


                {{-- Company Profile --}}
                <div class="flex items-center justify-between px-6 py-4">

                    <div>
                        <p class="text-sm font-medium text-gray-950 dark:text-white">
                            Company Profile
                        </p>

                        <p class="mt-1 text-xs text-gray-500">
                            Company information
                        </p>
                    </div>

                    @if ($hasCompanyProfile)
                        <span class="inline-flex items-center rounded-full bg-green-500/10 px-3 py-1 text-xs font-medium text-green-500">
                            Active
                        </span>
                    @else
                        <span class="inline-flex items-center rounded-full bg-gray-500/10 px-3 py-1 text-xs font-medium text-gray-400">
                            Not configured
                        </span>
                    @endif

                </div>


                {{-- Interoperability Standards --}}
                <div class="flex items-center justify-between px-6 py-4">

                    <div>
                        <p class="text-sm font-medium text-gray-950 dark:text-white">
                            Interoperability Standards
                        </p>

                        <p class="mt-1 text-xs text-gray-500">
                            Supported interoperability standards
                        </p>
                    </div>

                    <span class="text-sm font-semibold text-gray-950 dark:text-white">
                        {{ $interoperabilityStandardsCount }}
                        <span class="font-normal text-gray-500">
                            records
                        </span>
                    </span>

                </div>

            </div>

        </div>

    </div>
</x-filament-panels::page>