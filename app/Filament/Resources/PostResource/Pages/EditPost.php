<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        if ((int) $data['isPublished'] == 1) {
            $data['publishedAt'] = Carbon::now();
        } else {
            $data['publishedAt'] = null;
        }

        $record->update($data);

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
