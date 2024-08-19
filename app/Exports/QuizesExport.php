<?php

namespace App\Exports;

use App\Models\Quiz;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class QuizesExport implements FromCollection, WithHeadings
{

    protected $year;
    protected $month;

    public function __construct($year, $month)
    {
        $this->year = $year;
        $this->month = $month;
    }

    public function collection()
    {
        $query = Quiz::query();

        if ($this->year) {
            $query->whereYear('created_at', $this->year);
        }

        if ($this->month) {
            $query->whereMonth('created_at', $this->month);
        }

        return $query->get();
    }

    public function headings(): array
    {
        return [
            'id',
            'Nombre completo',
            'Número de teléfono',
            'Correo',
            'Atendió',
            '¿Cómo calificaría en general el servicio recibido por nuestro despacho contable?',
            '¿Qué tan satisfecho está con la calidad del trabajo realizado por nuestro equipo?',
            '¿Cómo calificaría la precisión y puntualidad de los informes que recibió?',
            '¿Cómo evaluaría la comunicación con nuestro equipo?',
            '¿Qué tan bien entendió las explicaciones y recomendaciones proporcionadas?',
            '¿Cómo calificaría la rapidez y eficacia con la que resolvimos cualquier problema o inquietud que tuvo?',
            '¿Qué aspectos del servicio le gustaría que mejoráramos?',
            '¿Hay algún servicio adicional que le gustaría que ofreciéramos?',
            '¿Tiene algún otro comentario o sugerencia que le gustaría compartir con nosotros?',
            'Registrado el',
            'Editado el'
        ];
    }
}
