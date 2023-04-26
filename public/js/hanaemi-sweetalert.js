const flashData = $('.flash-data').data('flashdata');
var base_url = window.location.origin;

if(flashData){
    Swal.fire({
        title: 'Notifikasi',
        text: flashData,
    })
}


$(document).ready(function() {
    $('#dataTable').DataTable();

    // Cuti
    $('#dataTable').on('click', '.showCutiInfo', function () {
            var val = $(this).val();
            $.ajax({
                url: "/user/cuti/"+val,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    Swal.fire({
                        title: 'Informasi Cuti',
                        html: `<div class="card-body">
                        <img src="${base_url}/img/hanaemi/img-cuti.svg" class="img-fluid" alt="Edit Informasi Karyawan">
                            <table class="table" style="text-align: left;">
                                <tr>
                                    <td>Nama Cuti</td>
                                    <td>${data[0].nama_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Cuti Mulai</td>
                                    <td>${data[0].mulai_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Cuti Selesai</td>
                                    <td>${data[0].selesai_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Diajukan</td>
                                    <td>${data[0].created_at}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>${data[0].keterangan_cuti}</td>
                                </tr>
                                </table>
                        </div>`
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal({
                        title: 'Pengajuan Cuti',
                        text: 'Tidak dapat mengambil data',
                        type: 'success'
                    });
                }
            });

            
    });
    $('#dataTable').on('click', '.showCutiInfoAdmin', function () {
        var val = $(this).val();
        $.ajax({
            url: "/admin/cuti/"+val,
            type: "GET",
            dataType: "json",
            success: function (data) {
                Swal.fire({
                    title: 'Informasi Cuti',
                    html: `<div class="card-body">
                    <img src="${base_url}/img/hanaemi/img-cuti.svg" class="img-fluid" alt="Edit Informasi Karyawan">
                        <table class="table" style="text-align: left;">
                            <tr>
                                    <td>Nama Cuti</td>
                                    <td>${data[0].nama_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Cuti Mulai</td>
                                    <td>${data[0].mulai_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Cuti Selesai</td>
                                    <td>${data[0].selesai_cuti}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Diajukan</td>
                                    <td>${data[0].created_at}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>${data[0].keterangan_cuti}</td>
                                </tr>
                            </table>
                    </div>`
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                Swal({
                    title: 'Pengajuan Cuti',
                    text: 'Tidak dapat mengambil data',
                    type: 'failed'
                });
            }
        });

        
    });
    $('#dataTable').on('click', '.approveCutiAdmin', function () {
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menerima pengajuan cuti ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/cuti/"+val,
                    type: "POST",
                    data: {
                        'status': 1
                    },
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Pengajuan Cuti Berhasil Diterima',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal({
                            title: 'Pengajuan Cuti',
                            text: 'Server Error',
                            type: 'failed'
                        });
                    }
                });
            }
          })
    });
    $('#dataTable').on('click', '.rejectCutiAdmin', function () {
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menolak pengajuan cuti ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/cuti/"+val,
                    type: "POST",
                    data: {
                        'status': 2
                    },
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Pengajuan Cuti Berhasil Ditolak',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal({
                            title: 'Pengajuan Cuti',
                            text: 'Server Error',
                            type: 'failed'
                        });
                    }
                });
            }
          })
    });
    

    // Jabatan
    $("#jabatanTambah").click(function(){
        var val = $(this).val();
        Swal.fire({
            title: 'Tambah Jabatan',
            html: `
            <img src="${base_url}/img/hanaemi/img-tambah.svg" class="img-fluid">
            <input type="text" id="nama_jabatan" class="swal2-input" placeholder="Nama Jabatan">
            <input type="number" id="gaji_pokok" class="swal2-input" placeholder="Gaji Pokok">`,
            confirmButtonText: 'Tambah Data',
            focusConfirm: false,
            preConfirm: () => {
              const nama_jabatan = Swal.getPopup().querySelector('#nama_jabatan').value
              const gaji_pokok = Swal.getPopup().querySelector('#gaji_pokok').value
              if (!nama_jabatan || !gaji_pokok) {
                Swal.showValidationMessage(`Harap isi semua formulir`)
              }
              $.ajax({
                url: "/admin/jabatan/add",
                type: "POST",
                data: {
                    'nama_jabatan': nama_jabatan,
                    'gaji_pokok': gaji_pokok
                },
                dataType: "json",
                success: function (data) {
                    let timerInterval
                    Swal.fire({
                    title: 'Data berhasil ditambahkan',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        location.reload();
                    })
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        title: 'Server Error',
                        text: 'Tidak dapat menambahkan data',
                        type: 'failed'
                    });
                }
            });
            }
          })
    });

    $('#dataTable').on('click', '.jabatanEdit', function () {
        var val = $(this).val();
        $.ajax({
            url: "/admin/jabatan/"+val,
            type: "GET",
            dataType: "json",
            success: function (data) {
                Swal.fire({
                    title: 'Edit Jabatan',
                    html: `
                    <img src="${base_url}/img/hanaemi/img-tambah.svg" class="img-fluid">
                    <input type="text" id="nama_jabatan" class="swal2-input" value="${data[0].nama_jabatan}" placeholder="Nama Jabatan">
                    <input type="number" id="gaji_pokok" class="swal2-input" value="${data[0].gaji_pokok}" placeholder="Gaji Pokok">`,
                    confirmButtonText: 'Ubah Data',
                    focusConfirm: false,
                    preConfirm: () => {
                      const nama_jabatan = Swal.getPopup().querySelector('#nama_jabatan').value
                      const gaji_pokok = Swal.getPopup().querySelector('#gaji_pokok').value
                      if (!nama_jabatan || !gaji_pokok) {
                        Swal.showValidationMessage(`Harap isi semua formulir`)
                      }
                      $.ajax({
                        url: "/admin/jabatan/"+val,
                        type: "POST",
                        data: {
                            'nama_jabatan': nama_jabatan,
                            'gaji_pokok': gaji_pokok
                        },
                        dataType: "json",
                        success: function (data) {
                            let timerInterval
                    Swal.fire({
                    title: 'Data berhasil diubah',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        location.reload();
                    })
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            Swal.fire({
                                title: 'Server Error',
                                text: 'Tidak dapat mengubah data',
                                type: 'failed'
                            });
                        }
                    });
                    }
                  })
            },
            error: function (xhr, ajaxOptions, thrownError) {
                Swal.fire({
                    title: 'Server Error',
                    text: 'Tidak dapat mengambil data',
                    type: 'failed'
                });
            }
        });
    });
    $('#dataTable').on('click', '.jabatanHapus', function () {
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus jabatan ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/jabatan/"+val,
                    type: "POST",
                    data: {
                        '_method': 'DELETE'
                    },
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Jabatan Berhasil Dihapus',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal({
                            title: 'Penghapusan Jabatan',
                            text: 'Server Error',
                            type: 'failed'
                        });
                    }
                });
            }
          })
    });

    // Divisi
    $("#divisiTambah").click(function(){
        var val = $(this).val();
        Swal.fire({
            title: 'Tambah Divisi',
            html: `
            <img src="${base_url}/img/hanaemi/img-tambah.svg" class="img-fluid" alt="Edit Informasi Karyawan">
            <input type="text" id="nama_divisi" class="swal2-input" placeholder="Nama Divisi">
            <input type="number" id="tunjangan_divisi" class="swal2-input" placeholder="Gaji Pokok">`,
            confirmButtonText: 'Tambah Data',
            focusConfirm: false,
            preConfirm: () => {
              const nama_divisi = Swal.getPopup().querySelector('#nama_divisi').value
              const tunjangan_divisi = Swal.getPopup().querySelector('#tunjangan_divisi').value
              if (!nama_divisi || !tunjangan_divisi) {
                Swal.showValidationMessage(`Harap isi semua formulir`)
              }
              $.ajax({
                url: "/admin/divisi/add",
                type: "POST",
                data: {
                    'nama_divisi': nama_divisi,
                    'tunjangan_divisi': tunjangan_divisi
                },
                dataType: "json",
                success: function (data) {
                    let timerInterval
                    Swal.fire({
                    title: 'Data berhasil ditambahkan',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        location.reload();
                    })
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        title: 'Server Error',
                        text: 'Tidak dapat menambahkan data',
                        type: 'failed'
                    });
                }
            });
            }
          })
    });

    $('#dataTable').on('click', '.divisiEdit', function () {
        var val = $(this).val();
        $.ajax({
            url: "/admin/divisi/"+val,
            type: "GET",
            dataType: "json",
            success: function (data) {
                Swal.fire({
                    title: 'Edit Divisi',
                    html: `
                    <img src="${base_url}/img/hanaemi/img-tambah.svg" class="img-fluid">
                    <input type="text" id="nama_divisi" class="swal2-input" value="${data[0].nama_divisi}" placeholder="Nama Divisi">
                    <input type="number" id="tunjangan_divisi" class="swal2-input" value="${data[0].tunjangan_divisi}" placeholder="Gaji Pokok">`,
                    confirmButtonText: 'Ubah Data',
                    focusConfirm: false,
                    preConfirm: () => {
                      const nama_divisi = Swal.getPopup().querySelector('#nama_divisi').value
                      const tunjangan_divisi = Swal.getPopup().querySelector('#tunjangan_divisi').value
                      if (!nama_divisi || !tunjangan_divisi) {
                        Swal.showValidationMessage(`Harap isi semua formulir`)
                      }
                      $.ajax({
                        url: "/admin/divisi/"+val,
                        type: "POST",
                        data: {
                            'nama_divisi': nama_divisi,
                            'tunjangan_divisi': tunjangan_divisi
                        },
                        dataType: "json",
                        success: function (data) {
                            let timerInterval
                    Swal.fire({
                    title: 'Data berhasil diubah',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        location.reload();
                    })
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            Swal.fire({
                                title: 'Server Error',
                                text: 'Tidak dapat mengubah data',
                                type: 'failed'
                            });
                        }
                    });
                    }
                  })
            },
            error: function (xhr, ajaxOptions, thrownError) {
                Swal.fire({
                    title: 'Server Error',
                    text: 'Tidak dapat mengambil data',
                    type: 'failed'
                });
            }
        });
    });

    $('#dataTable').on('click', '.divisiHapus', function () {
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus divisi ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/divisi/"+val,
                    type: "POST",
                    data: {
                        '_method': 'DELETE'
                    },
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Divisi Berhasil Dihapus',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal({
                            title: 'Server Error',
                            text: 'Gagal Menghapus Data',
                            icon: 'failed'
                        });
                    }
                });
            }
          })
    });
    
    $('#dataTable').on('click', '.pegawaiHapus', function () {
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menghapus pegawai ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/pegawai/"+val,
                    type: "POST",
                    data: {
                        '_method': 'DELETE'
                    },
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Pegawai Berhasil Dihapus',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal({
                            title: 'Server Error',
                            text: 'Gagal Menghapus Data',
                            icon: 'failed'
                        });
                    }
                });
            }
          })
    });

    // Presensi Tambah
    $("#tambahPresensi").click(function(){
        var val = $(this).val();
        Swal.fire({
            title: 'Apakah anda yakin ingin menambahkan presensi hari ini?',
            text: "Data tidak dapat diubah setelah menekan tombol Ya",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/presensi/add",
                    type: "POST",
                    dataType: "json",
                    success: function (data) {
                        let timerInterval
                        Swal.fire({
                        title: 'Presensi Berhasil Ditambahkan',
                        icon: 'success',
                        timer: 2000,
                        timerProgressBar: false,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                        }).then((result) => {
                            location.reload();
                        })
                        
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        Swal.fire({
                            title: 'Server Error',
                            text: 'Tidak dapat menambah presensi',
                            type: 'failed'
                        });
                    }
                });
            }
          })
    });
    $("#presensiButton").click(function(){
        var val = $(this).val();
        var id = val.split("|")
        Swal.fire({
            title: 'Lakukan Presensi',
            html: `
            <img src="${base_url}/img/hanaemi/img-presensi-swal.svg" class="img-fluid" alt="Edit Informasi Karyawan">
            <select class="form-control" name="id_kondisi" id="id_kondisi" required>
  <option value="1" selected>Hadir</option>
  <option value="2">Izin</option>
</select>`,
            confirmButtonText: 'Tambah Data',
            focusConfirm: false,
            preConfirm: () => {
              const kondisi = Swal.getPopup().querySelector('#id_kondisi').value
              if (!kondisi) {
                Swal.showValidationMessage(`Harap isi semua formulir`)
              }
              $.ajax({
                url: "/user/presensi/add",
                type: "POST",
                data: {
                    'id_presensi': id[0],
                    'id_users' : id[1],
                    'id_kondisi': kondisi,
                },
                dataType: "json",
                success: function (data) {
                    let timerInterval
                    Swal.fire({
                    title: 'Berhasil melakukan presensi',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: false,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                        location.reload();
                    })
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    Swal.fire({
                        title: 'Gagal',
                        text: 'Anda sepertinya sudah presensi',
                        type: 'failed'
                    });
                }
            });
            }
          })
    });

});