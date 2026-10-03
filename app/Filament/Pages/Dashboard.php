<?php

namespace App\Filament\Pages;

use App\Models\Accreditation;
use App\Models\Compliance;
use App\Models\InteroperabilityStandard;
use App\Models\News;
use App\Models\CompanyProfile;
use App\Models\HomepageHero;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard';

    protected static ?string $navigationLabel = 'Dashboard';

    // protected string $view = 'filament.pages.dashboard';

    public function getViewData(): array
    {
        return [
            'accreditationsCount' => Accreditation::count(),
            'compliancesCount' => Compliance::count(),
            'newsCount' => News::count(),
            'interoperabilityStandardsCount' => InteroperabilityStandard::count(),
            'hasCompanyProfile' => CompanyProfile::exists(),
            'hasHomepageHero' => HomepageHero::exists(),
        ];
    }
}