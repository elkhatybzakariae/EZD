<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Actions\Exports\Enums\Contracts\ExportFormat;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Create New Project')->tabs([
                    Tab::make('Project Information')->schema([
                        TextInput::make('title')->label('Project Title')->required(),
                        TextInput::make('link')->label('Link')->required(),
                        TextInput::make('email')->label('Email')->required(),
                        TextInput::make('password')->label('Password')->required(),
                        Textarea::make('description')
                            ->label('Description')
                            ->columnSpanFull()
                            ->required(),
                        FileUpload::make('pic')
                            ->rules(['mimes:jpeg,png,jpg,gif,svg'])
                            ->disk('public')
                            ->directory('pics')
                            ->columnSpanFull(),
                    ])->columns(2),
                ])->columnSpanFull()->persistTabInQueryString(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('pic')->disk('public'),
                TextColumn::make('title')->label('Project')->sortable()->searchable(),
                TextColumn::make('link')->label('Link')->sortable()->searchable(),
                TextColumn::make('email')->label('Email')->sortable()->searchable(),
                TextColumn::make('password')->label('Password')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->sortable()->searchable()->toggleable(),
            ])->filters([
                // 
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->headerActions([
                // ExportAction::make()
                //     ->exporter(ProductExporter::class)
                //     ->formats([
                //         ExportFormat::Csv
                //     ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                // ExportBulkAction::make()->exporter(ProductExporter::class)
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
