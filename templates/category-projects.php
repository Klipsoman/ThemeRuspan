<?php 
 /*
 Template Name: Projects
 */
get_header();
?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header">Проекты</h1>
  </div>
</div>

<!-- projects-page -->
<div class="projects-page">
  <form method="get" id="projects-main-form">
    <div class="projects">
      <div class="container">
        <div class="projects__filters">

          <div class="projects__filter custom-select" id="projects-filter-sectors">
            <div class="custom-select__title description-secondary">Секторы</div>
            <div class="custom-select__body">
              <ul class="custom-select__list">
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name1" id="name1">
                  </div>
                  <div class="custom-select__label">
                    <label for="name1">Торговые здания</label>
                  </div>
                </li>
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name2" id="name2">
                  </div>
                  <div class="custom-select__label">
                    <label for="name2">Логистические здания и склады</label>
                  </div>
                </li>
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name3" id="name3">
                  </div>
                  <div class="custom-select__label">
                    <label for="name3">Административные и общественные здания</label>
                  </div>
                </li>
              </ul>
              <input class="custom-select__btn btn btn-grey" type="submit" value="Применить">
            </div>
          </div>

          <div class="projects__filter custom-select disabled" id="projects-filter-products">
            <div class="custom-select__title description-secondary">Продукция</div>
            <div class="custom-select__body">
              <ul class="custom-select__list">
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name11" id="name11">
                  </div>
                  <div class="custom-select__label">
                    <label for="name11">Брошюры</label>
                  </div>
                </li>
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name22" id="name22">
                  </div>
                  <div class="custom-select__label">
                    <label for="name22">Сертификаты</label>
                  </div>
                </li>
              </ul>
              <input class="custom-select__btn btn btn-grey" type="submit" value="Применить">
            </div>
          </div>

          <div class="projects__reset">Сбросить фильтры x</div>

        </div>
        <div class="projects__list">

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project2.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project2.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project2.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project3.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project3.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

          <div class="projects__item">
            <a href="" class="projects__link">
              <div class="projects__image-box">
                <img src="./assets/images/project3.png" alt="" class="projects__img">
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title">Х5 Group</div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title">Распределительный центр «Пятерочка»</div>
                </div>
              </div>
            </a>
          </div>

        </div>

        <div class="projects__options">
          <!-- pagination -->
          <div class="projects-page-pagination pagination">
            <div class="container">
              <div class="pagination__items">
                <div class="pagination__prev"></div>
                <div class="pagination__item current">1</div>
                <div class="pagination__item">2</div>
                <div class="pagination__item">3</div>
                <div class="pagination__next"></div>
              </div>
            </div>
          </div>
          <!-- !pagination -->
          <div class="amount" id="projects-and-sertificates-amount">
            <div class="amount__body">
              <div class="amount__title description-secondary" data-mount="12">12</div>
              <ul class="amount__list">
                <li class="amount__item">
                  <label for="" data-mount="12">
                    12
                    <input type="radio" value="12" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="12">
                  <label for="" data-mount="24">
                    24
                    <input type="radio" value="24" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="24">
                  <label for="" data-mount="48">
                    48
                    <input type="radio" value="48" data-mount="48" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="96">
                  <label for="" data-mount="96">
                    96
                    <input type="radio" value="96" data-mount="96" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="96">
                  <input type="submit" value="Применить">
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- catalog -->
    <div class="catalog">
      <div class="container">
        <div class="catalog__body">
          <div class="catalog__link-box">
            <a href="" class="catalog__link">Скачать каталог "Портфолио" (pdf)</a>
          </div>
          <div class="catalog__download-box">
            <a href="" class="catalog__download-link">Скачать</a>
          </div>
        </div>
      </div>
    </div>

  </form>

</div>

<?php get_footer();?>