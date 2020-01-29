<?php

namespace App\Console\Commands;

use App\Akiya;
use DemeterChain\A;
use Illuminate\Console\Command;

class ImportAkiyaData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:akiya-data {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'import data for akiya from csv file';

    protected $akiya;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Akiya $akiya)
    {
        parent::__construct();
        $this->akiya = $akiya;
    }

    public function handle()
    {
        echo "start inmport akiya data...\n";
        $createCount = 0;
        $updateCount = 0;
        // 空き家情報が記載されているCSVへのパス
		$csv_path = $this->argument('path');
		// CSVからデータを配列形式で取得
		$csvArray = $this->loadCsvFromDir($csv_path,
            ['akiya_id', 'location', 'landarea', 'drivewayarea', 'buildingarea', 'buildingstructure']);

		foreach ($csvArray as $data) {
            $_akiya = null;
		    $_akiya = $this->akiya->query()->where('akiya_id', $data['akiya_id'])->first();
            if (empty($_akiya)) {
                $_akiya = new Akiya();
                ++$createCount;
            } else {
		        ++$updateCount;
            }
            $_akiya->fill($data)->save();
		}

		echo "created count is $createCount\n";
		echo "updated count is $updateCount\n";
        echo "end inmport akiya data.\n";
    }

    public function loadCsvFromDir($path, $columns)
    {
        $csvArray = [];

        $csv = new \SplFileObject($path);
        $csv->setCsvControl();
        $csv->setFlags(\SplFileObject::READ_CSV | \SplFileObject::DROP_NEW_LINE | \SplFileObject::SKIP_EMPTY | \SplFileObject::READ_AHEAD);

        foreach ($csv as $i => $row) {
            // 1行目はヘッダ行なのでスルー
            if($i === 0) {
                continue;
            }
            $csvArray[] = array_combine($columns, $row);
        }

        return $csvArray;
    }
}
