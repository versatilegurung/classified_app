<?php

namespace App\Filament\Resources;

use App\Models\Ad;
use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AdResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class AdResource extends Resource
{
    protected static ?string $model = Ad::class;
    protected static ?string $navigationGroup = 'Ads Management';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('user_id')
                    ->hidden()
                    ->numeric(),

                Forms\Components\Select::make('category_id')
                    ->label('Category')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Forms\Components\TextInput::make('sub_category_id')
                    ->label('Sub-Category')
                    ->numeric(),

                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->prefix('NPR'),
                Forms\Components\Toggle::make('negotiable')
                    ->required(),

                //condition new or used
                Forms\Components\Select::make('condition')
                    ->options([
                        'new' => 'New',
                        'used' => 'Used',
                    ])
                    ->required(),

                Forms\Components\Select::make('district_id')
                    ->relationship('district', 'name')
                    ->searchable()
                    ->required(),

                //get user list
                Forms\Components\Select::make('user_id')
                    ->label('User')
                    ->options(\App\Models\User::all()->pluck('name', 'id'))
                    ->required(),

                Forms\Components\Toggle::make('published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('NPR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('condition')
                //     ->searchable(),
                Tables\Columns\IconColumn::make('published')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListAds::route('/'),
            // 'create' => Pages\CreateAd::route('/create'),
            'edit' => Pages\EditAd::route('/{record}/edit'),
        ];
    }
}
