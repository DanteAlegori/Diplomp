@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
  <form class="mt-10" action="{{ route('updatebios') }}" enctype="multipart/form-data" method="POST" >
    @csrf

    <legend>Обновление Биографии</legend>

    <input type="hidden" name="bio_id" value="{{ $bio->id }}">

    <div class="mb-3">
      <label for="name" class="form-label">Имя</label>
      <input type="string" class="form-control" id="name" name="name" value="{{ $bio->name }}" >
    </div>

    <div class="mb-3">
      <label for="surname" class="form-label">Фамилия</label>
      <input type="string" class="form-control" id="surname" name="surname" value="{{ $bio->surname }}" >
    </div>

    <div class="mb-3">
      <label for="patronomic" class="form-label">Отчество</label>
      <input type="string" class="form-control" id="patronomic" name="patronomic"  value="{{ $bio->patronomic }}">
    </div>


      <div class="mb-3">
      <label for="img" class="form-label">Фото человека</label>  
      <input class="form-control" type="file" id="img" name="img">
      </div>

      <div class="mb-3">
        <label for="birthday_date" class="form-label">Дата рождения</label>
        <input type="date" class="form-control" id="birthday_date" name="birthday_date" value="{{ $bio->birthday_date }}" >
      </div>

      <div class="mb-3">
        <label for="death_date" class="form-label">Дата смерти</label>
        <input type="date" class="form-control" id="death_date" name="death_date" value="{{ $bio->death_date }}" >
      </div>

      <div class="mb-3">
        <label for="birthday_img" class="form-label">Фото места рождения</label>  
        <input class="form-control" type="file" id="birthday_img" name="birthday_img">
        </div>

        <div class="mb-3">
          <label for="birthday_place" class="form-label">Место рождения</label>
          <input type="string" class="form-control" id="birthday_place" name="birthday_place" value="{{ $bio->birthday_place }}">
        </div>

        <div class="mb-3">
          <label for="death_img" class="form-label">Фото места смерти</label>  
          <input class="form-control" type="file" id="death_img" name="death_img">
          </div>

          <div class="mb-3">
            <label for="death_place" class="form-label">места смерти</label>
            <input type="string" class="form-control" id="death_place" name="death_place" required>
          </div>





          <div class="mb-3">
            <label for="childhood_live_img" class="form-label">Фото детства</label>  
            <input class="form-control" type="file" id="childhood_live_img" name="childhood_live_img">
            </div>

            <div class="mb-3">
              <label for="childhood_live_content" class="form-label">Описание детства человека</label>
              <textarea class="form-control" id="childhood_live_content"  name="childhood_live_content" rows="10" value="{{ $bio->childhood_live_content }}"></textarea>
            </div>


          <div class="mb-3">
            <label for="stydent_live_img" class="form-label">Фото обучения</label>  
            <input class="form-control" type="file" id="stydent_live_img" name="stydent_live_img">
            </div>

            <div class="mb-3">
              <label for="stydent_live_content" class="form-label">Описание обучения человека</label>
              <textarea class="form-control" id="stydent_live_content"  name="stydent_live_content" rows="10" value="{{ $bio->stydent_live_content }}"></textarea>
            </div>

            <div class="mb-3">
              <label for="osnovnaia_live_img" class="form-label">Фото из основной жизни человека</label>  
              <input class="form-control" type="file" id="osnovnaia_live_img" name="osnovnaia_live_img">
              </div>

              <div class="mb-3">
                <label for="osnovnaia_live_content" class="form-label">Описание основной жизни человека</label>
                <textarea class="form-control" id="osnovnaia_live_content"  name="osnovnaia_live_content" rows="10" value="{{ $bio->osnovnaia_live_content }}"></textarea>
              </div>

              <div class="mb-3">
                <label for="pensia_live_img" class="form-label">Фото пенсии человека</label>  
                <input class="form-control" type="file" id="pensia_live_img" name="pensia_live_img">
                </div>

                
              <div class="mb-3">
                <label for="pensia_live_content" class="form-label">Описание пенсии человека</label>
                <textarea class="form-control" id="pensia_live_content"  name="pensia_live_content" rows="10" value="{{ $bio->pensia_live_content }}"></textarea>
              </div>






              <div class="mb-3">
                <label for="opisanie_deitelnosti" class="form-label">Описание деятельности человека</label>
                <textarea class="form-control" id="opisanie_deitelnosti"  name="opisanie_deitelnosti" rows="10" value="{{ $bio->opisanie_deitelnosti }}"></textarea>
              </div>


              <div class="mb-3">
                <label for="xp_for_work" class="form-label">Опыт професиональной работы человека</label>
                <textarea class="form-control" id="xp_for_work"  name="xp_for_work" rows="10" value="{{ $bio->xp_for_work }}"></textarea>
              </div>


              <div class="mb-3">
                <label for="achivments" class="form-label">Достижения</label>
                <textarea class="form-control" id="achivments"  name="achivments" rows="10" value="{{ $bio->achivments }}"></textarea>
              </div>


              <div class="mb-3">
                <label for="nagradi" class="form-label">Награды</label>
                <textarea class="form-control" id="nagradi"  name="nagradi" rows="10" value="{{ $bio->nagradi }}"></textarea>
              </div>
              <div class="mb-3">
                <label for="sourse" class="form-label">Источник</label>
                <input type="string" class="form-control" id="sourse" name="sourse" required>
              </div>

      <button type="submit" class="btn btn-success">Обновить</button>
   </form>
  </div>
@endsection