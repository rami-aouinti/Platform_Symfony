<?php

namespace App\Service;

enum TypeSkillStatus: string {
    case Programmiersprachen = 'Programmiersprachen';
    case FrontendTechnologien = 'Frontend Technologien';
    case Frameworks = 'Frameworks';

    case Cms = 'Cms';
    case Database = 'Database';
    case AgileMethoden = 'Agile Methoden';

    case Versionierung = 'Versionierung';
    case ApiEntwicklung = 'Api Entwicklung';
    case Entwicklungstools = 'Entwicklungstools';


    case Sicherheit = 'Sicherheit';
    case UnitTesting = 'Unit Testing';
    case Architektur = 'Architektur';

    case QualitatCode = 'Qualität Code';
}
