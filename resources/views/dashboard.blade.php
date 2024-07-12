@extends('layouts.base')

@section('content')

<div class="breadcrumbs-box rounded rounded-2 bg-white p-2 mt-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center">
        <i class="ri-dashboard-line me-2"></i>Metode Topsis
      </li>
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <h3 class="mb-3">Pemilihan Karyawan Terbaik</h3>
    <p>
      Metode TOPSIS (Technique for Order of Preference by Similarity to Ideal Solution) adalah salah satu metode dalam
      sistem pendukung keputusan yang digunakan untuk menentukan alternatif terbaik dari sejumlah alternatif dengan
      membandingkan tingkat kedekatannya terhadap solusi ideal positif dan solusi ideal negatif.
    </p>
    <p>
      Dalam konteks pemilihan karyawan, metode TOPSIS digunakan untuk mengevaluasi dan memilih karyawan terbaik berdasarkan
      beberapa kriteria yang telah ditentukan. Proses pemilihan ini melibatkan beberapa langkah, yaitu:
    </p>
    <ol>
      <li>
        <strong>Menentukan kriteria evaluasi:</strong> Kriteria ini bisa berupa kualifikasi, pengalaman kerja, keterampilan
        teknis, dan soft skills.
      </li>
      <li>
        <strong>Menentukan bobot untuk setiap kriteria:</strong> Bobot ini menunjukkan seberapa penting masing-masing kriteria
        dalam proses pemilihan.
      </li>
      <li>
        <strong>Membangun matriks keputusan:</strong> Matriks ini berisi nilai kinerja setiap karyawan terhadap masing-masing
        kriteria.
      </li>
      <li>
        <strong>Menormalkan matriks keputusan:</strong> Proses normalisasi dilakukan untuk mengubah nilai kinerja ke dalam
        skala yang sama.
      </li>
      <li>
        <strong>Menghitung solusi ideal positif dan negatif:</strong> Solusi ideal positif adalah nilai terbaik untuk setiap
        kriteria, sedangkan solusi ideal negatif adalah nilai terburuk untuk setiap kriteria.
      </li>
      <li>
        <strong>Menghitung jarak setiap alternatif ke solusi ideal positif dan negatif:</strong> Jarak ini digunakan untuk
        menentukan kedekatan setiap alternatif (karyawan) terhadap solusi ideal.
      </li>
      <li>
        <strong>Menghitung nilai preferensi untuk setiap alternatif:</strong> Nilai preferensi ini digunakan untuk menentukan
        peringkat karyawan berdasarkan kedekatan mereka terhadap solusi ideal.
      </li>
    </ol>
  </div>
</div>
@endsection
